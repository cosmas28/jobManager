<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class About_us extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->ads = '';
        $this->ads = $this->ads_model->get_ads();
    }

    public function index()
    {
        $data['ads_row'] = $this->ads;
        $data['title'] = 'Contact Us';

        //employer section
        $total_employers 	= $this->employers_model->record_count('pp_employers');

        //employee section
        $total_job_seekers = $this->job_seekers_model->record_count('pp_job_seekers');

        //posted job section
        $total_posted_jobs = $this->posted_jobs_model->record_count('pp_post_jobs');

        $data['total_posted_jobs'] = $total_posted_jobs;
        $data['total_employers'] = $total_employers;
        $data['total_job_seekers'] = $total_job_seekers;

       $this->load->view('about-us', $data);
    }
}