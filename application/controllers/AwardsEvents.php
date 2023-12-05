<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AwardsEvents extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','awardsEvents');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Awards & Events List';
		$data['awardsEvents'] = $this->awardsEvents->awardEventList();
		$this->load->view('awardsEventsList',$data);
	}

	public function awardsEvents()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Awards & Events';
        }else{
            $data['page_title'] = 'Edit Awards & Events';
            $id =$this->uri->segment(2);
            $data['awardsEvents'] = $this->awardsEvents->awardEventById($id);          
        }
		$this->load->view('awardsEvents',$data);
	}

	public function addupdateAwardsEvents()
	{   
        $title = $this->input->post('name');
        $description = $this->input->post('description');
        $id = $this->input->post('id');

         if(isset($_FILES["awardsEvents_image"]["name"])){
            $config['upload_path'] = './upload/awardsEvents/';  
            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('awardsEvents_image');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/awardsEvents/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/awardsEvents/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->awardsEvents->addAwardEvent($title,$description,$data["file_name"]);
                }else{		            
		            $result = $this->awardsEvents->updateAwardEvent($id,$title,$description,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/awardsEventsList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/awardsEventsList'));
        }
        
	}

	public function deleteAwardsEvents(){
        $id =$this->uri->segment(3);
        $delete = $this->awardsEvents->deleteAwardEventById($id);
        return $delete;
    }
}
