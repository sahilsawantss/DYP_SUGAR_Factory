<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartmentInformation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','departmentInformation');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Department Information List';
		$data['departmentCategory'] = $this->departmentInformation->departmentCategoryList();
		$data['departmentInformation'] = $this->departmentInformation->departmentInformationList();
		$this->load->view('departmentInformationList',$data);
	}

	public function departmentInformation()
	{
		if(empty($this->uri->segment(2))){
			$data['departmentCategory'] = $this->departmentInformation->departmentCategoryList();
            $data['page_title'] = 'Add Department Information';
        }else{
            $data['page_title'] = 'Edit Department Information';
            $id =$this->uri->segment(2);
            $data['departmentCategory'] = $this->departmentInformation->departmentCategoryList();
            $data['departmentInformation'] = $this->departmentInformation->departmentInformationListById($id);          
        }
		$this->load->view('departmentInformation',$data);
	}

	public function addupdateDepartmentInformation()
	{   
		$category_id = $this->input->post('category_id');
        $title = $this->input->post('name');
        $description = $this->input->post('departmentInformation_details');
        $id = $this->input->post('id');

         if(isset($_FILES["departmentInformation_image"]["name"])){
            $config['upload_path'] = './upload/departmentInformation/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('departmentInformation_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/departmentInformation/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/departmentInformation/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->departmentInformation->addDepartmentInformation($category_id,$title,$description,$data["file_name"]);
                }else{		            
		            $result = $this->departmentInformation->updateDepartmentInformation($id,$category_id,$title,$description,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/departmentInformationList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/departmentInformationList'));
        }
        
	}

	public function deleteDepartmentInformation(){
        $id =$this->uri->segment(3);
        $delete = $this->departmentInformation->deleteDepartmentInformationById($id);
        return $delete;
    }
}
