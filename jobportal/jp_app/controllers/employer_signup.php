<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employer_Signup extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->ads = '';
		$this->ads = $this->ads_model->get_ads();
    }

	public function index()
	{
        //employee section
        $total_job_seekers = $this->job_seekers_model->record_count('pp_job_seekers');

        //employer section
        $total_employers 	= $this->employers_model->record_count('pp_employers');

        $data['total_job_seekers'] = $total_job_seekers;
        $data['total_employers'] = $total_employers;
		$data['ads_row'] = $this->ads;
		$data['title'] = 'Create New Employer Account at '.SITE_URL;
		$data['msg']='';

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[pp_employers.email]|strip_all_tags');
        $this->form_validation->set_rules('company_name', 'Company name', 'trim|required|strip_all_tags');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]|strip_all_tags');
		$this->form_validation->set_rules('confirm_pass', 'Confirm password', 'trim|required|matches[pass]|strip_all_tags');

		$this->form_validation->set_rules('captcha', 'Verification code', 'trim|required|validate_ml_spam');

		$this->form_validation->set_error_delimiters('<div class="errowbox"><div class="erormsg">', '</div></div>');
		if ($this->form_validation->run() === FALSE) {
			$data['cpt_code'] = create_ml_captcha();

			$this->load->view('employer_signup_view',$data);
			return;

		}

		$current_date_time = date("Y-m-d H:i:s");
		$company_slug = make_slug($this->input->post('company_name'));
		$is_slug = $this->companies_model->check_slug($company_slug);
		if($is_slug>0){
			$company_slug.='-'.time();
		}
		$employer_array = array(
								'email' => $this->input->post('email'),
								'pass_code' => $this->input->post('pass'),
								'ip_address' => $this->input->ip_address(),
								'dated' => $current_date_time
		);

		$company_array = array(
								'company_name' => $this->input->post('company_name'),
								'company_slug' => $company_slug,
								'ownership_type' => $this->input->post('ownership_type')
		);

		$company_id = $this->companies_model->add_company($company_array);
		$employer_array['company_ID'] = $company_id;
		$employer_id = $this->employers_model->add_employer($employer_array);

		$user_data = array(
				'user_id' => $employer_id,
				 'user_email' => $this->input->post('email'),
				 'slug' => $company_slug,
				 'is_user_login' => TRUE,
				 'is_job_seeker' => FALSE,
				 'is_employer' => TRUE
				 );
		$this->session->set_userdata($user_data);

		//Sending email to the user
		$row_email = $this->email_model->get_records_by_id(3);
		$config = array();
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);
		$this->email->clear(TRUE);
		$this->email->from($row_email->from_email, $row_email->from_name);
		$this->email->to($this->input->post('email'));
		$this->email->subject($row_email->subject);
		$mail_message = $this->email_drafts_model->employer_signup($row_email->content, $employer_array);
		$this->email->message($mail_message);
		$this->email->send();

		redirect(base_url('employer/post_new_job'),'');
	}
}
