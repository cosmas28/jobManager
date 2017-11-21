<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_Us extends CI_Controller {
	
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
		$data['title'] = 'Contact Us';
		$data['msg']='';
		$data['result_cities'] = $this->cities_model->get_all_cities();
		$data['result_countries'] = $this->countries_model->get_all_countries();
		
		$this->form_validation->set_rules('full_name', 'Full name', 'trim|required|strip_all_tags|time_diff');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|strip_all_tags');	
		$this->form_validation->set_rules('city', 'City', 'trim');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|strip_all_tags');
		$this->form_validation->set_rules('message', 'Comment', 'trim|required|strip_all_tags');
		$this->form_validation->set_rules('captcha', 'Verification code', 'trim|required|validate_ml_spam');
		$this->form_validation->set_error_delimiters('<div class="errowbox"><div class="erormsg">', '</div></div>');
		if ($this->form_validation->run() === FALSE) {
			$data['cpt_code'] = create_ml_captcha();
			$this->load->view('contact_us_view',$data);
			return;
			
		}
		$data_array = array(
								'full_name' => $this->input->post('full_name'),
								'email' => $this->input->post('email'),
								'phone' => $this->input->post('phone'),
								'message' => $this->input->post('message'),
								'ip_address' => $this->input->ip_address(),
								'city' =>  $this->input->post('city'),
								'dated' => date("M d, Y H:i")
		);
		//$row_email = $this->email_model->get_records_by_id(1);
		
		$config = array();
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
	
		$this->email->initialize($config);
		$this->email->clear(TRUE);
		$this->email->from($this->input->post('email'), $this->input->post('full_name'));
		$this->email->to(ADMIN_EMAIL);
		$this->email->subject(SITE_NAME.' | Contact Us Form Submitted');
		$mail_message = $this->email_drafts_model->contact_us_draft($data_array);
		$this->email->message($mail_message);					
		$this->email->send();		
		
		$this->session->set_userdata('timestm', date("H:i:s"));
		$this->session->set_flashdata('success_msg', '<div class="alert alert-success">Contact Us form has been submitted successfully.</div>');
		redirect(base_url('contact-us'),'');
	}
}
