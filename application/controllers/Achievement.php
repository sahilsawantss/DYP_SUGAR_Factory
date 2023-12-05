<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achievement extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','achievement');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Achievement List';
		$data['achievement'] = $this->achievement->achievementList();
		$this->load->view('achievementList',$data);
	}

	public function achievement()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Achievement';
        }else{
            $data['page_title'] = 'Edit Achievement';
            $id =$this->uri->segment(2);
            $data['achievement'] = $this->achievement->achievementById($id);          
        }
		$this->load->view('achievement',$data);
	}

	public function addupdateAchievement()
	{   
        $name = $this->input->post('name');
        $achievement_details = $this->input->post('achievement_details');
        $id = $this->input->post('id');
                 
        if($id==''){
        	$result = $this->achievement->addAchievement($name,$achievement_details);
        }else{		            
            $result = $this->achievement->updateAchievement($id,$name,$achievement_details);
        }

        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/achievementList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/achievementList'));
        }
        
	}

	public function deleteAchievement(){
        $id =$this->uri->segment(3);
        $delete = $this->achievement->deleteAchievementById($id);
        return $delete;
    }
}
