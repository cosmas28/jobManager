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

       $this->load->view('about-us', $data);
    }
}