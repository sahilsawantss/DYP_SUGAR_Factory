<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','login');
        
    }

	public function index()
	{
		$data['department_category'] = $this->login->departmentCategoryList();
		$this->load->view('ui_design/contact', $data);
	}

	

    public function logout()
    {
        $this->clear_cache();
        $this->session->sess_destroy();
        redirect(base_url());
    } 

    
     public function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
}

