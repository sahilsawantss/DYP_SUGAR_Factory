<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SocialActivity extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','socialActivity');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Social Activity List';
		$data['socialActivity'] = $this->socialActivity->socialActivityList();
		$this->load->view('socialActivityList',$data);
	}

	public function socialActivity()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Social Activity';
        }else{
            $data['page_title'] = 'Edit Social Activity';
            $id =$this->uri->segment(2);
            $data['socialActivity'] = $this->socialActivity->socialActivityById($id);          
        }
		$this->load->view('socialActivity',$data);
	}

	public function addupdateSocialActivity()
	{   
        $title = $this->input->post('name');
        $description = $this->input->post('description');
        $id = $this->input->post('id');

         if(isset($_FILES["socialActivity_image"]["name"])){
            $config['upload_path'] = './upload/socialActivity/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('socialActivity_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/socialActivity/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/socialActivity/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->socialActivity->addSocialActivity($title,$description,$data["file_name"]);
                }else{		            
		            $result = $this->socialActivity->updateSocialActivity($id,$title,$description,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/socialActivityList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/socialActivityList'));
        }
        
	}

	public function deleteSocialActivity(){
        $id =$this->uri->segment(3);
        $delete = $this->socialActivity->deleteSocialActivityById($id);
        return $delete;
    }
}
