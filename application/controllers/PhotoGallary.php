<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotoGallary extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','photoGallary');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Photo Gallary List';
		$data['photoGallary'] = $this->photoGallary->photoGallaryList();
		$this->load->view('photoGallaryList',$data);
	}

	public function photoGallary()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Photo Gallary';
        }else{
            $data['page_title'] = 'Edit Photo Gallary';
            $id =$this->uri->segment(2);
            $data['photoGallary'] = $this->photoGallary->photoGallaryById($id);          
        }
		$this->load->view('photoGallary',$data);
	}

	public function addupdatePhotoGallary()
	{   
        $title = $this->input->post('name');
        $id = $this->input->post('id');

         if(isset($_FILES["photoGallary_image"]["name"])){
            $config['upload_path'] = './upload/photoGallary/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('photoGallary_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/photoGallary/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 750;  
                 $config['height'] = 500;  
                 $config['new_image'] = './upload/photoGallary/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->photoGallary->addPhotoGallary($title,$data["file_name"]);
                }else{		            
		            $result = $this->photoGallary->updatePhotoGallary($id,$title,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/photoGallaryList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/photoGallaryList'));
        }
        
	}

	public function deletePhotoGallary(){
        $id =$this->uri->segment(3);
        $delete = $this->photoGallary->deletePhotoGallaryById($id);
        return $delete;
    }
}
