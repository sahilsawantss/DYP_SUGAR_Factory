<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','login');
        
    }

	public function index()
	{
		$data['msg'] = '';
		$data['page_title'] = 'Login Page';
		$this->load->view('login',$data);
	}

	public function dashboardView()
	{
		$data['page_title'] = 'Dashboard';
		$contact = $this->input->post("contact");
        $password = $this->input->post("password");
        $result = $this->login->loginuser($contact,$password);
        if($result->result()  && ((!empty($contact)) && (!empty($password)))){
            $this->load->library('session');
            $this->session->set_userdata('admin_name',$result->result()[0]->firstname.' '.$result->result()[0]->lastname);    
            $this->load->view('dashboard',$data);
        }else{
            $data['msg'] = 'Invalid contact number or password';
            $this->load->view('login',$data);
        }		
	}

	public function forgotPassword()
	{
		$data['page_title'] = 'Forgot Password';
		$this->load->view('forgotPassword',$data);
	}

	public function updateAdminpassword(){
        $contact = $this->input->post("contact");
        $password = $this->input->post("password");
        if(!empty($contact) && !empty($password)){
        	$result = $this->login->updateAdminpassword($contact,$password);
        	redirect('login');
        }else{
        	$data['msg'] = 'Please enter contact number or password';
            $this->load->view('forgotPassword',$data);
        }       
    }

	public function signup()
	{
		$data['page_title'] = 'Admin Signup';
		$this->load->view('signup',$data);
	}

	public function addAdmin()
	{
		$firstname = $this->input->post("firstname");
        $lastname = $this->input->post("lastname");
        $contact = $this->input->post("contact");
        $password = $this->input->post("password");
        $result = $this->login->addNewAdmin($firstname,$lastname,$contact,$password);
        if($result){
        	$data['msg'] = '';
    		redirect('login');
        }
	}

    public function checkContactExits($contact){
        $result = $this->login->checkContactExits($contact);
        $count = $result->num_rows();
        if($count>=1)
        { 
            echo 'unique';
        }else{
            echo 'not unique';
        }
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

