<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinancialPerformance extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel','financialPerformance');
    }

	public function index()
	{		
		$data['msg'] = '';
		$data['page_title'] = 'Financial Performance List';
		$data['financialPerformance'] = $this->financialPerformance->financialPerformanceList();
		$this->load->view('financialPerformanceList',$data);
	}

	public function financialPerformance()
	{
		if(empty($this->uri->segment(2))){
            $data['page_title'] = 'Add Financial Performance';
        }else{
            $data['page_title'] = 'Edit Financial Performance';
            $id =$this->uri->segment(2);
            $data['financialPerformance'] = $this->financialPerformance->financialPerformanceById($id);          
        }
		$this->load->view('financialPerformance',$data);
	}

	public function addupdateFinancialPerformance()
	{   
        $net_revenue = $this->input->post('net_revenue');
        $expences = $this->input->post('expences');
        $EBICD = $this->input->post('EBICD');
        $interest_Determination = $this->input->post('interest_Determination');
        $provision_of_tax = $this->input->post('provision_of_tax');
        $networth = $this->input->post('networth');
        $ERP = $this->input->post('ERP');
        $cane_price = $this->input->post('cane_price');
        $year = $this->input->post('year');

        $id = $this->input->post('id');
                 
        if($id==''){
        	$result = $this->financialPerformance->addFinancialPerformance($net_revenue,$expences,$EBICD,$interest_Determination,$provision_of_tax,$networth,$ERP,$cane_price,$year);
        }else{		            
            $result = $this->financialPerformance->updateFinancialPerformance($id,$net_revenue,$expences,$EBICD,$interest_Determination,$provision_of_tax,$networth,$ERP,$cane_price,$year);
        }

        if($result){
            if(empty($id)){
                $this->session->set_flashdata('true', 'Record added sucessfully');
            }else{
                $this->session->set_flashdata('true', 'Record updated sucessfully');                        
            }
            redirect(base_url('/financialPerformanceList'));

         }else{
            $this->session->set_flashdata('err', "Unable to add Record");
            redirect(base_url('/financialPerformanceList'));
        }
        
	}

	public function deleteFinancialPerformance(){
        $id =$this->uri->segment(3);
        $delete = $this->financialPerformance->deleteFinancialPerformanceById($id);
        return $delete;
    }
}
