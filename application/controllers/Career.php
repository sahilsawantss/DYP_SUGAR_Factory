<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','career');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Career List';
		$data['career'] = $this->career->careerList();
		$this->load->view('careerList',$data);
	}

	public function career()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Career';
        }else{
            $data['page_title'] = 'Edit Career';
            $id =$this->uri->segment(2);
            $data['career'] = $this->career->careerListById($id);          
        }
		$this->load->view('career',$data);
	}

	public function addupdateCareer()
	{   
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $id = $this->input->post('id');

         if(isset($_FILES["career_image"]["name"])){
            $config['upload_path'] = './upload/career/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('career_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/career/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/career/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->career->addcareer($title,$description,$data["file_name"]);
                }else{		            
		            $result = $this->career->updatecareer($id,$title,$description,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/careerList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/careerList'));
        }
        
	}

	public function deletecareer(){
        $id =$this->uri->segment(3);
        $delete = $this->career->deletecareerById($id);
        return $delete;
    }
}
