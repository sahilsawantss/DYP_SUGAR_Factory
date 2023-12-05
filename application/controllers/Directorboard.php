<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','directorboard');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Directorboard List';
		$data['directorboard'] = $this->directorboard->directorboardList();
		$this->load->view('directorboardList',$data);
	}

	public function directorboard()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Board of Dircetor';
        }else{
            $data['page_title'] = 'Edit Board of Dircetor';
            $id =$this->uri->segment(2);
            $data['directorboard'] = $this->directorboard->directorboardById($id);          
        }
		$this->load->view('directorboard',$data);
	}

	public function addupdatedirectorboard()
	{   
        $name = $this->input->post('name');
        $post = $this->input->post('post');
        $directorboard_details = $this->input->post('directorboard_details');
        $status = $this->input->post('status');
        $id = $this->input->post('id');

         if(isset($_FILES["directorboard_image"]["name"])){
            $config['upload_path'] = './upload/directorboard/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('directorboard_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/directorboard/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/directorboard/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->directorboard->adddirectorboard($name,$post,$directorboard_details,$status,$data["file_name"]);
                }else{		            
		            $result = $this->directorboard->updatedirectorboard($id,$name,$post,$directorboard_details,$status,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/directorboardList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/directorboardList'));
        }
        
	}

	public function deleteDirectorboard(){
        $id =$this->uri->segment(3);
        $delete = $this->directorboard->deletedirectorboardById($id);
        return $delete;
    }
}
