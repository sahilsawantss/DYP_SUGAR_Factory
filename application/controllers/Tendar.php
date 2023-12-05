<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tendar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','tendar');
    }

    public function index()
    {       
        $data['msg'] = '';
        $data['page_title'] = 'Tendar List';
        $data['tendar'] = $this->tendar->TendarList();
        $this->load->view('tendarList',$data);
    }

    public function tendar()
    {
        if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Tendar';
        }else{
            $data['page_title'] = 'Edit Tendar';
            $id =$this->uri->segment(2);
            $data['tendar'] = $this->tendar->tendarById($id);          
        }
        $this->load->view('tendar',$data);
    }

    public function addupdateTendar()
    {   
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $id = $this->input->post('id');


         if(isset($_FILES["tendar_pdf"]["name"])){
            $config['upload_path'] = './upload/tendar/';  
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';  
            $this->load->library('upload', $config);  
           
            $this->upload->do_upload('tendar_pdf');
                $data = $this->upload->data();  
                $config['image_library'] = 'gd2';

                 $config['source_image'] = './upload/tendar/'.$data["file_name"];  
                 $config['create_thumb'] = FALSE;  
                 $config['maintain_ratio'] = FALSE;  
                 $config['quality'] = '50%';  
                 $config['width'] = 100;  
                 $config['height'] = 100;  
                 $config['new_image'] = './upload/tendar/'.$data["file_name"];  

                 $this->load->library('image_lib',$config); 
                 $this->upload->initialize($config);
                 $this->image_lib->resize();
                 
                if($id==''){
                    $result = $this->tendar->addTendar($title,$description,$start_date,$end_date,$data["file_name"]);
                }else{                  
                    $result = $this->tendar->updateTendar($id,$title,$description,$start_date,$end_date,$data["file_name"]);
                 }


        }
        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/tendarList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/tendarList'));
        }
        
    }

    public function deleteTendar(){
        $id =$this->uri->segment(3);
        $delete = $this->tendar->deleteTendarById($id);
        return $delete;
    }
}
