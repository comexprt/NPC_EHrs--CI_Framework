<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EHRs extends CI_Controller {

	
	public function index()
	{
		if($this->session->userdata('logged_in'))
	   {
		  $session_data = $this->session->userdata('logged_in');
		  
		 
		  $this->Home_page();

		 
	   }else if($this->session->userdata('logged_emp'))
	   {
	   
		 redirect('EHRs/authentication');
	   }
	   else
	    {
			//If no session, redirect to login page
			$this->login();
		}
	}
	
	
		

	function __construct()
	{
	   parent::__construct();
	   $this->load->model('model_get','',TRUE);
	   $this->load->library('pagination');
	   $prefs = array (
			   'local_time'    => time(),
	        );
		   
		$this->load->library('calendar', $prefs);
		$this->load->library('session');	   
    }
	
	/* Verify LOGIN */
	function verifyadmin()
	{
	   //This method will have the credentials validation
	   $this->load->library('form_validation');

	   $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database_Admin');

	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		  $this->index();
	   }
	   else
	   {
		 //Go to private area
		 redirect('EHRs/Home_page');
	   }

    }
 
	public function login(){		
		$this->load->helper(array('form'));
		
	   if($this->session->userdata('logged_in'))
	   {
		 
		 redirect('EHRs/Home_page');
	   }else if($this->session->userdata('logged_emp'))
	   {
			$message = $this->session->flashdata('message');
			$this->session->keep_flashdata('message');
			$choice = $this->session->flashdata('choice');
			$this->session->keep_flashdata('choice');
			
			if($choice=="ae4"){
			$data['message'] = $message;
			$this->load->view('login',$data);
			}else
			{
			
				redirect('EHRs/authentication');
			}
	   }
	   else
	    {
			
			$data['message'] = "";
			//If no session, redirect to login page
			$this->load->view('login',$data);
		}
	}
 
  function check_database_Admin($password)
	{
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');

	   //query the database
	   $result = $this->model_get->loginAdmin($username, $password);

	   if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'EmId' => $row->EmId,
			 'username' => $row->username,
			 'password' => $row->password,
			 'Lname' => $row->Lname
		   );
		   
		   if($sess_array['EmId']=="1")
		   {
				$this->session->set_userdata('logged_in', $sess_array);
		   }else{
				$this->session->set_userdata('logged_emp', $sess_array);
		   }
		 }
		 return TRUE;
	   }
	   else
	   {
		 $this->form_validation->set_message('check_database_Admin', 'Error: Invalid username or password');
		 return false;
	   }
	}
	

	
	
	
	
   /****   emp-logout destroy session ******/
	public function Admin_logout(){
	  $this->session->sess_destroy();
	  redirect('EHRs/index');
	
	}
	
	
	/* -------------     end login            -------------------------------------------------*/   
	
	
	public function Home_page(){
		if($this->session->userdata('logged_in'))
	   {

		  $choice = $this->session->flashdata('choice');
		  $message = $this->session->flashdata('message');
		  $EmId = $this->session->flashdata('EmId');
		
		  $this->session->keep_flashdata('EmId');
		  $this->session->keep_flashdata('choice');
		  $this->session->keep_flashdata('message');
	  
		  if ($choice=="ae1"){
			$data['message'] = $message;
			$data['EmId'] = $EmId;
            $data['EmpList'] = $this->model_get->Emp_List(); 
		  }elseif ($choice=="ae3"){
			$data['message'] = $message;
			$data['EmId'] = "";
            $data['EmpList'] = $this->model_get->viewemployee($EmId);  
		  }elseif ($choice=="ae4"){
			$data['message'] = $message;
			$data['EmId'] = "";
            $data['EmpList'] = $this->model_get->Emp_List(); 
		  }else{
			$data['EmId'] = "";
		    $data['message'] = "NPC-AGUS 6/7 HEPC LIST OF EMPLOYEE";
            $data['EmpList'] = $this->model_get->Emp_List(); 
		  }

		  
          $data['search'] = $this->model_get->search(); 
		  $this->load->view('Home_page',$data);

	   }else if($this->session->userdata('logged_emp'))
	   {
	   
		 redirect('EHRs/authentication');
	   }else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	
	public function setpassword(){
		if($this->session->userdata('logged_emp'))
	   {
			$session_data = $this->session->userdata('logged_emp');
			$EmId = $session_data['EmId'];
            $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
            $this->load->view('setpassword',$data);
	   }
	   else
	    {
			 
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	
	public function updatepassword(){
	if($this->session->userdata('logged_emp'))
	   {
		  $EmId = $this->input->post('EmId');
		  $Fname = $this->input->post('Fname');
		  $Mname = $this->input->post('Mname');
		  $Lname = $this->input->post('Lname');
		  $position = $this->input->post('position');
		  $gender = $this->input->post('gender');
		  $status = $this->input->post('status');
		  $password=$this->input->post('password');
		  
	      $newRow=array(
			
			"username"=>$EmId,
			"password"=>$password,
			"Fname"=> $Fname,
			"Mname"=> $Mname,
			"Lname"=> $Lname,
			"position"=> $position,
			"gender"=> $gender,
			"status"=> $status,

		 ); 
	
			 $this->model_get->updateemployee($EmId,$newRow);
			 $message="You've been LOGOUT : New Password has been SET";
             $this->session->set_flashdata('choice','ae4');
             $this->session->set_flashdata('message',"$message");
			 redirect('EHRs/login');  
		
	   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }

	
	public function authentication(){
		if($this->session->userdata('logged_emp'))
	   {	
			$session_data = $this->session->userdata('logged_emp');
			$EmId = $session_data['EmId'];
			
			$choice = $this->session->flashdata('choice');
			$this->session->keep_flashdata('choice');
			
			$result = $this->model_get->viewemployee($EmId); 
			if($result)
			{
			 $sess_array = array();
			 foreach($result as $row)
			 {
			   $sess_array = array(
				 'EmId' => $row->EmId,
				 'username' => $row->username,
				 'password' => $row->password,
				 'Lname' => $row->Lname
			   );
			   }
			}else{}
			$setpassword = $sess_array ['password'];
			
			$Lname= $session_data['Lname'];
			$defaultpass="$Lname.123";
			
			
			if ($choice=="ae4"){
				
				$message = $this->session->flashdata('message');
				$this->session->keep_flashdata('message');
				$data['message'] = $message;
			}else{
				$data['message'] = "Blood Chemistry Examination Records";
			}
			
			if($defaultpass!=$setpassword){
				
				$data['annual'] ="";
				$data['btr'] = $this->model_get->btr($EmId); 
				$data['viewemployee'] = $this->model_get->viewemployee($EmId); 
				$data['countrecords'] = $this->model_get->countrecords($EmId); 
				$this->load->view('profile',$data);
			}else{
				redirect('EHRs/setpassword');	
				
			}
		
	   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	public function recordgraphs(){
		if($this->session->userdata('logged_emp'))
		{
		
		 $session_data = $this->session->userdata('logged_emp');
		 $EmId = $session_data['EmId'];
		 $result = $this->model_get->viewemployee($EmId); 
			if($result)
			{
			 $sess_array = array();
			 foreach($result as $row)
			 {
			   $sess_array = array(
				 'EmId' => $row->EmId,
				 'username' => $row->username,
				 'password' => $row->password,
				 'Lname' => $row->Lname
			   );
			   }
			}else{}
		$setpassword = $sess_array ['password'];
		 $Lname= $session_data['Lname'];
		 if($setpassword!="$Lname.123"){
		 $data['message'] = "SUMMARY GRAPH";
         $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
         $data['btr'] = $this->model_get->btr($EmId); 	
         $this->load->view('recordgraphs',$data);
		 }else{
			redirect('EHRs/setpassword');	
		 }
		 
		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	
	public function printrecordgraphs(){
		if($this->session->userdata('logged_emp'))
		{
		 $session_data = $this->session->userdata('logged_emp');
			$EmId = $session_data['EmId'];
		$result = $this->model_get->viewemployee($EmId); 
			if($result)
			{
			 $sess_array = array();
			 foreach($result as $row)
			 {
			   $sess_array = array(
				 'EmId' => $row->EmId,
				 'username' => $row->username,
				 'password' => $row->password,
				 'Lname' => $row->Lname
			   );
			   }
			}else{}
			$setpassword = $sess_array ['password'];
		 $Lname= $session_data['Lname'];
		 if($setpassword!="$Lname.123"){
		 $data['message'] = "SUMMARY GRAPH";
         $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
         $data['btr'] = $this->model_get->btr($EmId); 	
         $this->load->view('printrecordgraphs',$data);
		 }else{
			redirect('EHRs/setpassword');	
		 }
		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	
	public function DeleteEmployee(){
		if($this->session->userdata('logged_in'))
	   {
		   $this->load->model('model_get');
		   $id =$this->input->post('EmId');
		   $Lname =$this->input->post('Lname');
		   $Mname =$this->input->post('Mname');
		   $Fname =$this->input->post('Fname');
		
		   $this->model_get->DeleteEmployeeRecord($id);  
		   $this->model_get->DeleteEmployee($id);  
		   
		   $EmId = "$Lname, $Fname $Mname";
		   $data['EmId'] = "$Lname, $Fname $Mname";
		   $data['message']="\" $EmId \" HAS BEEN DELETED";
		   $data['EmpList'] = $this->model_get->Emp_List(); 
		   $data['search'] = $this->model_get->search(); 
		   $this->load->view('Home_page',$data);
		   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}

	}
	
	public function updateemployee(){
	if($this->session->userdata('logged_in'))
	   {
		  $EmId = $this->input->post('EmId');
		  $Fname = $this->input->post('Fname');
		  $Mname = $this->input->post('Mname');
		  $Lname = $this->input->post('Lname');
		  $position = $this->input->post('position');
		  $gender = $this->input->post('gender');
		  $status = $this->input->post('status');
		  $password=$this->input->post('password');
		  
	      $newRow=array(
			
			"username"=>$EmId,
			"password"=>$password,
			"Fname"=> $Fname,
			"Mname"=> $Mname,
			"Lname"=> $Lname,
			"position"=> $position,
			"gender"=> $gender,
			"status"=> $status,

		 ); 
	
			 $this->model_get->updateemployee($EmId,$newRow);
			 $message="\" $Lname, $Fname $Mname \" RECORD HAS BEEN UPDATED";
             $this->session->set_flashdata('choice','ae4');
             $this->session->set_flashdata('message',"$message");
			 redirect('EHRs/Home_page');  
		
	   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	public function addemployee(){
	if($this->session->userdata('logged_in'))
	   {
		  $EmId = $this->input->post('EmId');
		  $Fname = $this->input->post('Fname');
		  $Mname = $this->input->post('Mname');
		  $Lname = $this->input->post('Lname');
		  $position = $this->input->post('position');
		  $gender = $this->input->post('gender');
		  $status= $this->input->post('status');
		  $password=$Lname.'.123';
	      $newRow=array(
			
			"EmId"=>$EmId,
			"username"=>$EmId,
			"password"=>$password,
			"Fname"=> $Fname,
			"Mname"=> $Mname,
			"Lname"=> $Lname,
			"position"=> $position,
			"gender"=> $gender,
			"status"=> $status

		 ); 
	
	
          $this->load->library('form_validation');
          $this->form_validation->set_rules('EmId', 'EmId', 'trim|required|xss_clean|callback_check_employee_EmId');
		  if($this->form_validation->run() == FALSE)
		   {
			 $this->model_get->addEmployee($newRow);
			 $message="\" $Lname, $Fname $Mname \" HAS BEEN ADDED";
             $this->session->set_flashdata('choice','ae1');
             $this->session->set_flashdata('message',"$message");
             $this->session->set_flashdata('EmId',"$EmId");
			 redirect('EHRs/Home_page');
			  
		   }
		   else //if exist
		   {
			 $message="Error : \" DCE No.: $EmId \" ALREADY EXIST";
			 $this->session->set_flashdata('choice','ae1');
             $this->session->set_flashdata('message',"$message");
             $this->session->set_flashdata('EmId',"$EmId");
			 redirect('EHRs/Home_page');
		   }
		
	   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	
	
	
	function check_employee_EmId($EmId)
	{
	   $result = $this->model_get->validEmid($EmId);
	   if($result)
	   {
		
		 return TRUE;
	   }
	   else
	   {
		 return false;
	   }
	}
 
	public function addBtr(){
	if($this->session->userdata('logged_in'))
	   {
		  $EmId1 = $this->input->post('EmId');
		  $dateConducted = $this->input->post('dateConducted');
		  $pieces = explode ("-", $dateConducted);
		  $annual=$pieces[0];
		 
	      $newRow=array(
			
			"EmId"=> $this->input->post('EmId'),
			"dateConducted"=>$this->input->post('dateConducted'),
			"annual"=>$annual,
			"T1"=>$this->input->post('T1'),
			"T2"=>$this->input->post('T2'),
			"T3"=>$this->input->post('T3'),
			"T4"=>$this->input->post('T4'),
			"T5"=>$this->input->post('T5'),
			"T6"=>$this->input->post('T6'),
			"T7"=>$this->input->post('T7'),
			"T8"=>$this->input->post('T8'),
			"T9"=>$this->input->post('T9'),
		

		 ); 
		  
		  
		  $this->load->library('form_validation');
		  $this->form_validation->set_rules('EmId', 'EmId', 'trim|required|xss_clean|callback_check_record_date');
		  if($this->form_validation->run() == FALSE)
		   {
		      $message1="$annual RECORD HAS BEEN ADDED";
			 $this->session->set_flashdata('choice1','ae1');
			 $this->session->set_flashdata('message1',"$message1");
             $this->session->set_flashdata('annual',"$annual");
			 $this->session->set_flashdata('EmId1',"$EmId1");
			 $this->model_get->addBtr($newRow);
			 redirect('EHRs/viewemployee');
			 //echo $message1;
			  
		   }
		   else //if exist
		   {
			 $message1="Error : \" $annual\" ALREADY EXIST";
			 $this->session->set_flashdata('choice1','ae2');
             $this->session->set_flashdata('message1',"$message1");
             $this->session->set_flashdata('EmId1',"$EmId1");
             $this->session->set_flashdata('annual',"$annual");
			 redirect('EHRs/viewemployee');
			 //echo $message;
		   }
		  
		  
		  
	   }
	   else
	    {
			 //If no session, redirect to login page
			redirect('EHRs/index');
		}
    }
	
	public function EditRecord(){
	if($this->session->userdata('logged_in'))
	   {
		  $EmId1 = $this->input->post('EmId');
		  $BId = $this->input->post('BId');
		  $annual = $this->input->post('annual');
		  
	      $newRow=array(
			
			"EmId"=> $this->input->post('EmId'),
			"dateConducted"=>$this->input->post('dateConducted'),
			"annual"=>$annual,
			"T1"=>$this->input->post('T1'),
			"T2"=>$this->input->post('T2'),
			"T3"=>$this->input->post('T3'),
			"T4"=>$this->input->post('T4'),
			"T5"=>$this->input->post('T5'),
			"T6"=>$this->input->post('T6'),
			"T7"=>$this->input->post('T7'),
			"T8"=>$this->input->post('T8'),
			"T9"=>$this->input->post('T9'),
		

		 ); 
		  
	
			 $this->model_get->updateeditrecord($BId,$newRow);
			 $message1="\" $annual \" RECORD HAS BEEN UPDATED";
			 $this->session->set_flashdata('choice1','ae2');
             $this->session->set_flashdata('message1',"$message1");
             $this->session->set_flashdata('EmId1',"$EmId1");
             $this->session->set_flashdata('annual',"$annual");
			 redirect('EHRs/viewemployee');
		
	   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	function check_record_date()
	{
		$EmId1 = $this->input->post('EmId');
		$dateConducted = $this->input->post('dateConducted');
		$pieces = explode ("-", $dateConducted);
		$annual=$pieces[0];	
	   $result = $this->model_get->validdate($EmId1,$annual);
	   
	   if($result)
	   {
		
		 return TRUE;
	   }
	   else
	   {
		 return false;
	   }
	}
 
	
	public function viewemployee(){
	if($this->session->userdata('logged_in'))
	   {
		  $choice1 = $this->session->flashdata('choice1');
		  $this->session->keep_flashdata('choice1');
		  
		  if ($choice1=="ae1"||$choice1=="ae2"){
		    $message1 = $this->session->flashdata('message1');
			$EmId1 = $this->session->flashdata('EmId1');
			$annual = $this->session->flashdata('annual');
		
			$this->session->keep_flashdata('EmId1');
			$this->session->keep_flashdata('annual');
			$this->session->keep_flashdata('message1');
			$data['message'] ="$message1";
			$data['annual'] ="$annual";
            $data['viewemployee'] = $this->model_get->viewemployee($EmId1); 
            $data['btr'] = $this->model_get->btr($EmId1); 
            $data['countrecords'] = $this->model_get->countrecords($EmId1); 
		  }else{
			$EmId = $this->input->post('EmId');
			$data['annual'] ="";
		    $data['message'] = "Blood Chemistry Examination Records";
            $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
            $data['btr'] = $this->model_get->btr($EmId); 
            $data['countrecords'] = $this->model_get->countrecords($EmId); 
		  }

           $this->load->view('viewemployee',$data);
		 
		
		 
	   }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}
    }
	
	 // delete items
	public function DeleteRecord(){
		if($this->session->userdata('logged_in'))
		{
		   $this->load->model('model_get');
		   $id = $this->input->post('BId');
		   $EmId = $this->input->post('EmId');
		   $annual = $this->input->post('annual');
		   
		   
		   
		   $this->model_get->DeleteRecord($id);  
		   $data['annual'] =$annual;
		   $data['message'] = "$annual RECORD HAS BEEN DELETED";
		   $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
		   $data['btr'] = $this->model_get->btr($EmId); 
		   $data['countrecords'] = $this->model_get->countrecords($EmId); 
		   $this->load->view('viewemployee',$data);
		 }
	   else
	    {
			 //If no session, redirect to login page
			 redirect('EHRs/index');
		}

	}
	
	public function searchemployee(){
		if($this->session->userdata('logged_in'))
		{
		
		 $EmId= $this->input->post('EmId');
		 if ($EmId=="null"){
		 $message="Error : NO RECORDS FOUND !!!";
		 $this->session->set_flashdata('choice','ae3');
		 }else{
		 $message="Successfull: RECORDS FOUND !!!";
			if($EmId=="all"){
				$this->session->set_flashdata('choice','ae0');
			
			}else{
				$this->session->set_flashdata('choice','ae3');
			}
		 }
		 
         $this->session->set_flashdata('message',"$message");
         $this->session->set_flashdata('EmId',"$EmId");
		 redirect('EHRs/Home_page');
		
		 
		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	
	public function Graphs(){
		if($this->session->userdata('logged_in'))
		{
		
		 $EmId= $this->input->post('EmId');
		 $data['message'] = "SUMMARY GRAPH";
         $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
         $data['btr'] = $this->model_get->btr($EmId); 	
         $this->load->view('results',$data);
	
		 
		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	
	
	
	public function printgraphs(){
		if($this->session->userdata('logged_in'))
		{
		
		 $EmId= $this->input->post('EmId');
		 $data['message'] = "SUMMARY GRAPH";
         $data['viewemployee'] = $this->model_get->viewemployee($EmId); 
         $data['btr'] = $this->model_get->btr($EmId); 	
         $this->load->view('printgraph',$data);

		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	
	public function makeacopy(){
		if($this->session->userdata('logged_in'))
		{
		
		 $EmId= $this->input->post('EmId');
		 $annual= $this->input->post('annual');
         $data['btr'] = $this->model_get->printpage($EmId,$annual); 	
         $this->load->view('printpage',$data);
	
		 
		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	public function recordscopy(){
		if($this->session->userdata('logged_emp'))
		{
		 $session_data = $this->session->userdata('logged_emp');
		 $EmId = $session_data['EmId'];
		 
		 $result = $this->model_get->viewemployee($EmId); 
			if($result)
			{
			 $sess_array = array();
			 foreach($result as $row)
			 {
			   $sess_array = array(
				 'EmId' => $row->EmId,
				 'username' => $row->username,
				 'password' => $row->password,
				 'Lname' => $row->Lname
			   );
			   }
			}else{}
			$setpassword = $sess_array ['password'];
		 $Lname= $session_data['Lname'];
		 if($setpassword!="$Lname.123"){
		 $annual= $this->input->post('annual');
         $data['btr'] = $this->model_get->printpage($EmId,$annual); 	
         $this->load->view('printrecord',$data);
	
			}else{
				redirect('EHRs/setpassword');
			
			}
		
		}
		
		else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }
	
	public function printsummary(){
		if($this->session->userdata('logged_in'))
		{
		
		 $year= $this->input->post('year');
         $data['btr'] = $this->model_get->printsummary($year); 	
         $data['CountRegular'] = $this->model_get->CountRegular($year); 	
         $data['year'] = $year; 	
         $this->load->view('printsummary',$data);
	
		 
		}else
		{
		 //If no session, redirect to login page
		 redirect('EHRs/index');
		}
    }

	
	
	
	
	
}

/* End of file EHRs.php */