<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartmentCategory extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','departmentCategory');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Department Category List';
		$data['departmentCategory'] = $this->departmentCategory->departmentCategoryList();
		$this->load->view('departmentCategoryList',$data);
	}

	public function departmentCategory()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Department Category';
        }else{
            $data['page_title'] = 'Edit Department Category';
            $id =$this->uri->segment(2);
            $data['departmentCategory'] = $this->departmentCategory->departmentCategoryListById($id);          
        }
		$this->load->view('departmentCategory',$data);
	}

	public function addupdateDepartmentCategory()
	{   
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $id = $this->input->post('id');

         if(isset($_FILES["departmentCategory_image"]["name"])){
            $config['upload_path'] = './upload/departmentCategory/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('departmentCategory_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/departmentCategory/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/departmentCategory/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->departmentCategory->addDepartmentCategory($title,$description,$data["file_name"]);
                }else{		            
		            $result = $this->departmentCategory->updateDepartmentCategory($id,$title,$description,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/departmentCategoryList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/departmentCategoryList'));
        }
        
	}

	public function deleteDepartmentCategory(){
        $id =$this->uri->segment(3);
        $delete = $this->departmentCategory->deleteDepartmentCategoryById($id);
        return $delete;
    }
}
