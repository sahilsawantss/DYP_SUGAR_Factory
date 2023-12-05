<?php

class AdminModel extends CI_Model
{
	public function loginuser($contact,$password){
		$query = $this->db->select('*')
							->where('contact', $contact)
							->where('password', $password)
							->get('admin_login');

		return $query;	
	}

	public function updateAdminpassword($contact,$password){
		$data = array (	
				 	'password' => $password
		);
       $this->db->where('contact', $contact);
       $query = $this->db->update('admin_login', $data);

       if($query){
       		return true;
       	}		
       		return false;
	}

	public function checkContactExits($contact){
		$query = $this->db->select('*')
							->where('contact',$contact)
							->get('admin_login');

		return $query;	
	}

	public function addNewAdmin($firstname,$lastname,$contact,$password){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	

                  'firstname' => $firstname,
                  'lastname' => $lastname,
                  'contact' => $contact,
                  'password' => $password,
                  'datetime' =>  $date            
 
                );
		$query = $this->db->insert('admin_login', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	//User Information
	public function userList(){
		$query = $this->db->select('up.*,ul.status as status')
		    		->from('user_profile as up')
		    		->join('user_login as ul','ul.user_id = up.user_id','left')
		        	->get();
		return $query;						
	}

	public function updateStatus($id,$status){
		$this->db->where('sno', $id);
        $query = $this->db->update('user_login', array('status' => $status));
	}

	//product List
	public function directorboardList(){
		$query = $this->db->select('*')
		    		->from('director_board')
		        	->get();
		return $query;					
	}

	public function adddirectorboard($name,$post,$directorboard_details,$status,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'name' => $name,
                  'post' => $post,
                  'description' => $directorboard_details,
                  'status' => $status,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('director_board', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updatedirectorboard($id,$name,$post,$directorboard_details,$status,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
                  'name' => $name,
                  'post' => $post,
                  'description' => $directorboard_details,
                  'status' => $status,
                  'image' => $image,
                  'datetime' =>  $date   
                );
		}else{
			$data = array (	
                  'name' => $name,
                  'post' => $post,
                  'description' => $directorboard_details,
                  'status' => $status,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('director_board', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function directorboardById($id){
		$this->db->select('*');
        $this->db->from('director_board');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deletedirectorboardById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('director_board');
		if($query){
			return true;
		}
		return false;
	}

	public function achievementList(){
		$query = $this->db->select('*')
		    		->from('major_achievement')
		        	->get();
		return $query;					
	}

	public function addAchievement($name,$directorboard_details){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'title' => $name,
                  'description' => $directorboard_details,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('major_achievement', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateAchievement($id,$name,$directorboard_details){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		$data = array (	
              'title' => $name,
              'description' => $directorboard_details,
              'datetime' =>  $date  
            );
		$this->db->where('id', $id);
       	$query = $this->db->update('major_achievement', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function achievementById($id){
		$this->db->select('*');
        $this->db->from('major_achievement');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteAchievementById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('major_achievement');
		if($query){
			return true;
		}
		return false;
	}

	public function departmentCategoryList(){
		$query = $this->db->select('*')
		    		->from('department_category')
		        	->get();
		return $query;					
	}

	public function addDepartmentCategory($title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('department_category', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateDepartmentCategory($id,$title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date  
                );
		}else{
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('department_category', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function departmentCategoryListById($id){
		$this->db->select('*');
        $this->db->from('department_category');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteDepartmentCategoryById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('department_category');
		if($query){
			return true;
		}
		return false;
	}

	
	public function departmentInformationList(){
		$query = $this->db->select('di.*,dc.title as cat_title')
		    		->from('department_information as di')
		    		->join('department_category as dc','di.category_id = dc.id','left')
		        	->get();
		return $query;					
	}

	public function addDepartmentInformation($category_id,$title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
				  'category_id' => $category_id,
                  'title' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('department_information', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateDepartmentInformation($id,$category_id,$title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
				  'category_id' => $category_id,
                  'title' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date  
                );
		}else{
			$data = array (	
				  'category_id' => $category_id,
                  'title' => $title,
                  'description' => $description,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('department_information', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function departmentInformationListById($id){
		$this->db->select('*');
        $this->db->from('department_information as di');
		$this->db->join('department_category as dc','di.category_id = dc.id','left');
        $this->db->where('di.id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteDepartmentInformationById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('department_information');
		if($query){
			return true;
		}
		return false;
	}

	public function awardEventList(){
		$query = $this->db->select('*')
		    		->from('awards_events')
		        	->get();
		return $query;					
	}

	public function addAwardEvent($title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'name' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('awards_events', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateAwardEvent($id,$title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
                  'name' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date  
                );
		}else{
			$data = array (	
                  'name' => $title,
                  'description' => $description,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('awards_events', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function awardEventById($id){
		$this->db->select('*');
        $this->db->from('awards_events');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteAwardEventById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('awards_events');
		if($query){
			return true;
		}
		return false;
	}

	public function socialActivityList(){
		$query = $this->db->select('*')
		    		->from('social_activity')
		        	->get();
		return $query;					
	}

	public function addSocialActivity($title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'name' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('social_activity', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateSocialActivity($id,$title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
                  'name' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date  
                );
		}else{
			$data = array (	
                  'name' => $title,
                  'description' => $description,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('social_activity', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function socialActivityById($id){
		$this->db->select('*');
        $this->db->from('social_activity');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteSocialActivityById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('social_activity');
		if($query){
			return true;
		}
		return false;
	}

	public function photoGallaryList(){
		$query = $this->db->select('*')
		    		->from('photo_gallary')
		        	->get();
		return $query;					
	}

	public function addPhotoGallary($title,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'title' => $title,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('photo_gallary', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updatePhotoGallary($id,$title,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
                  'title' => $title,
                  'image' => $image,
                  'datetime' =>  $date  
                );
		}else{
			$data = array (	
                  'title' => $title,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('photo_gallary', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function photoGallaryById($id){
		$this->db->select('*');
        $this->db->from('photo_gallary');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deletePhotoGallaryById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('photo_gallary');
		if($query){
			return true;
		}
		return false;
	}

	public function certificateList(){
		$query = $this->db->select('*')
		    		->from('certificate')
		        	->get();
		return $query;					
	}

	public function addCertificate($title,$description,$start_date,$end_date,$pdf_file){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'start_date' => $start_date,
                  'end_date' => $end_date,
                  'pdf_upload' => $pdf_file,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('certificate', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateCertificate($id,$title,$description,$start_date,$end_date,$pdf_file){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if($pdf_file!=''){
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'start_date' => $start_date,
                  'end_date' => $end_date,
                  'pdf_upload' => $pdf_file,
                  'datetime' =>  $date
                );
		}else{
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'start_date' => $start_date,
                  'end_date' => $end_date,
                  'datetime' =>  $date
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('certificate', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function certificateById($id){
		$this->db->select('*');
        $this->db->from('certificate');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteCertificateById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('certificate');
		if($query){
			return true;
		}
		return false;
	}

	public function careerList(){
		$query = $this->db->select('*')
		    		->from('career')
		        	->get();
		return $query;					
	}

	public function addCareer($title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('career', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateCareer($id,$title,$description,$image){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if (!empty($image)) {
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'image' => $image,
                  'datetime' =>  $date  
                );
		}else{
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'datetime' =>  $date  
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('career', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function careerListById($id){
		$this->db->select('*');
        $this->db->from('career');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteCareerById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('career');
		if($query){
			return true;
		}
		return false;
	}

	public function tendarList(){
		$query = $this->db->select('*')
		    		->from('tendar')
		        	->get();
		return $query;					
	}

	public function addTendar($title,$description,$start_date,$end_date,$pdf_file){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'start_date' => $start_date,
                  'end_date' => $end_date,
                  'pdf_upload' => $pdf_file,
                  'datetime' =>  $date     
                );
		$query = $this->db->insert('tendar', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateTendar($id,$title,$description,$start_date,$end_date,$pdf_file){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		if($pdf_file!=''){
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'start_date' => $start_date,
                  'end_date' => $end_date,
                  'pdf_upload' => $pdf_file,
                  'datetime' =>  $date
                );
		}else{
			$data = array (	
                  'title' => $title,
                  'description' => $description,
                  'start_date' => $start_date,
                  'end_date' => $end_date,
                  'datetime' =>  $date
                );
		}
		
		$this->db->where('id', $id);
       	$query = $this->db->update('tendar', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function tendarById($id){
		$this->db->select('*');
        $this->db->from('tendar');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteTendarById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('tendar');
		if($query){
			return true;
		}
		return false;
	}

	public function financialPerformanceList(){
		$query = $this->db->select('*')
		    		->from('financial_performance')
		        	->get();
		return $query;					
	}

	public function addFinancialPerformance($net_revenue,$expences,$EBICD,$interest_Determination,$provision_of_tax,$networth,$ERP,$cane_price,$year){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');

		$data = array (	
                  'net_revenue' => $net_revenue,
                  'expences' => $expences,
                  'EBICD' => $EBICD,
                  'interest_Determination' => $interest_Determination,
                  'provision_of_tax' => $provision_of_tax,
                  'networth' => $networth,
                  'ERP' => $ERP,
                  'cane_price' => $cane_price,
                  'year' => $year,
                  'datetime' =>  $date    
                );
		$query = $this->db->insert('financial_performance', $data);
		if($query){
       		return true;
       	}		
       		return false;
	}

	public function updateFinancialPerformance($id,$net_revenue,$expences,$EBICD,$interest_Determination,$provision_of_tax,$networth,$ERP,$cane_price,$year){
		date_default_timezone_set('Asia/Calcutta'); 
		$date = date('Y-m-d H:i:s');
		$data = array (	
                  'net_revenue' => $net_revenue,
                  'expences' => $expences,
                  'EBICD' => $EBICD,
                  'interest_Determination' => $interest_Determination,
                  'provision_of_tax' => $provision_of_tax,
                  'networth' => $networth,
                  'ERP' => $ERP,
                  'cane_price' => $cane_price,
                  'year' => $year,
                  'datetime' =>  $date     
                );
		
		$this->db->where('id', $id);
       	$query = $this->db->update('financial_performance', $data);

       	if($query){
       		return true;
       	}       		
       		return false;
	}

	public function financialPerformanceById($id){
		$this->db->select('*');
        $this->db->from('financial_performance');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }		
	}

	public function deleteFinancialPerformanceById($id=''){

		$query = $this->db->where('id', $id);
				 $this->db->delete('financial_performance');
		if($query){
			return true;
		}
		return false;
	}

	public function getDepartmentByCategoryId($id){

		$this->db->select('*');
        $this->db->from('financial_performance');
        $this->db->where('category_id', $id);
        $this->db->limit(1);


	}
}


?>