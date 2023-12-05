<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartmentController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','login');
        
    }

	public function index()
	{
        $category_id = $this->uri->segment(2);

		$data['department_category'] = $this->login->departmentCategoryList();
        $data['department_information'] = $this->login->departmentInformationList();
        $data['department_information_by_id'] = $this->login->getDepartmentByCategoryId($category_id);
		$this->load->view('ui_design/department',$data);
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

