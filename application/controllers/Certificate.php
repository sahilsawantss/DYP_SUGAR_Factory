<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','certificate');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Certificate List';
		$data['certificate'] = $this->certificate->certificateList();
		$this->load->view('certificateList',$data);
	}

	public function certificate()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Certificate';
        }else{
            $data['page_title'] = 'Edit Certificate';
            $id =$this->uri->segment(2);
            $data['certificate'] = $this->certificate->certificateById($id);          
        }
		$this->load->view('certificate',$data);
	}

	public function addupdatecertificate()
	{   
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $id = $this->input->post('id');


         if(isset($_FILES["certificate_pdf"]["name"])){
            $config['upload_path'] = './upload/certificate/';  
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('certificate_pdf');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/certificate/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/certificate/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                	$result = $this->certificate->addCertificate($title,$description,$start_date,$end_date,$data["file_name"]);
                }else{		            
		            $result = $this->certificate->updateCertificate($id,$title,$description,$start_date,$end_date,$data["file_name"]);
		         }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/certificateList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/certificateList'));
        }
        
	}

	public function deleteCertificate(){
        $id =$this->uri->segment(3);
        $delete = $this->certificate->deleteCertificateById($id);
        return $delete;
    }
}
