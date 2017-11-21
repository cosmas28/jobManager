<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jobseeker_Signup extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
		$this->ads = '';
		$this->ads = $this->ads_model->get_ads();
    }
	
	public function index()
	{
		$data['ads_row'] = $this->ads;
		if($this->session->userdata('is_job_seeker')==TRUE){
				redirect(base_url('jobseeker/dashboard'),'');
				exit;
		}
		$data['title'] = 'Create New Jobseeker Account at '.SITE_URL;
		$data['msg']='';
		#$data['result_cities'] = $this->cities_model->get_all_cities();
		#$data['result_countries'] = $this->countries_model->get_all_countries();
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[pp_job_seekers.email]|strip_all_tags');	
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]|strip_all_tags');
		$this->form_validation->set_rules('confirm_pass', 'Confirm password', 'trim|required|matches[pass]');


		$this->form_validation->set_rules('captcha', 'Verification code', 'trim|required|validate_ml_spam');
		
		$this->form_validation->set_message('is_unique', 'The %s is already taken');
		
		$this->form_validation->set_error_delimiters('<div class="errowbox"><div class="erormsg">', '</div></div>');
		if ($this->form_validation->run() === FALSE) {
			$data['cpt_code'] = create_ml_captcha();
			$this->load->view('jobseeker_signup_view',$data);
			return;
			
		}
		$current_date = date("Y-m-d H:i:s");
        $job_seeker_array = array(
								'email' => $this->input->post('email'),
								'password' => $this->input->post('pass'),
								'ip_address' => $this->input->ip_address(),
								'dated' => $current_date
		);

		$seeker_id = $this->job_seekers_model->add_job_seekers($job_seeker_array);
		$this->jobseeker_additional_info_model->add(array('seeker_ID'=>$seeker_id));
		$user_data = array(
				'user_id' => $seeker_id,
				 'user_email' => $this->input->post('email'),
				 'is_user_login' => TRUE,
				 'is_job_seeker' => TRUE,
				 'is_employer' => FALSE
				 );
		$this->session->set_userdata($user_data);
		
		//Sending email to the user
		$row_email = $this->email_model->get_records_by_id(2);
		$config = array();
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
	
		$this->email->initialize($config);
		$this->email->clear(TRUE);
		$this->email->from($row_email->from_email, $row_email->from_name);
		$this->email->to($this->input->post('email'));
		//
		$this->email->subject($row_email->subject);
		$mail_message = $this->email_drafts_model->jobseeker_signup($row_email->content, $job_seeker_array);
		$this->email->message($mail_message);
		$this->email->send();
		redirect(base_url('jobseeker/add_skills'),'');
	}
}
