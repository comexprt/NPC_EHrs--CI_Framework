<?php

	class Model_get extends CI_Model{

		
	
		function __construct()
		{
			parent::__construct();
		}
		
		/******* log-in administrator ******/
		
		function loginAdmin($username, $password){
			$this -> db -> select('EmId, username, password,Lname');
			$this -> db -> from('employee');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', $password);
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			if($query -> num_rows() == 1){
				return $query->result();   
			} else {     
					return false;
				}
		}

		function validEmid($EmId){
			$this -> db -> select('EmId');
			$this -> db -> select('Lname');
			$this -> db -> from('employee');
			$this -> db -> where('EmId', $EmId);
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			if($query -> num_rows() == 1){
				return $query->result();   
			} else {     
					return false;
				}
		}
		
		function validdate($EmId,$annual){
			$this -> db -> select('annual');
			$this -> db -> from('btr');
			$this -> db -> where('EmId', $EmId);
			$this -> db -> where('annual', $annual);
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			if($query -> num_rows() == 1){
				return $query->result();   
			} else {     
					return false;
				}
		}


		/*******  List of year  *********/
		function  Emp_List(){
			$query = $this->db->query(" SELECT * FROM employee WHERE EmId != '1' ORDER BY Lname ");		   
			$result = $query->result();
			return $result;  	
		}
		
		function search(){
			$query = $this->db->query(" SELECT * FROM employee WHERE EmId != '1' ORDER BY Lname");		   
			$result = $query->result();
			return $result;  	
		}
		//add employee
		public function addEmployee($data){
			$this->db->insert("employee",$data);		
		} 
		
	    public function  viewemployee($data){
			
			$query = $this->db->query("SELECT * FROM employee Where EmId='".$data."'");		   
			$result = $query->result();
		    return $result;  	
		}
		
		public function  btr($data){
			
			$query = $this->db->query("SELECT * FROM employee JOIN btr ON employee.EmId=btr.EmId Where employee.EmId='".$data."' ORDER BY btr.annual");		   
			$result = $query->result();
		    return $result;  	
		}
		public function printpage($data,$annual){
			
			$query = $this->db->query("SELECT * FROM employee JOIN btr ON employee.EmId=btr.EmId Where employee.EmId='".$data."' AND btr.annual='".$annual."'");		   
			$result = $query->result();
		    return $result;  	
		}
		
		public function printsummary($data){
			
			$query = $this->db->query("SELECT * FROM employee JOIN btr ON employee.EmId=btr.EmId Where btr.annual='".$data."' ORDER BY employee.status DESC,employee.Lname");
			$result = $query->result();
		    return $result;  	
		}
		public function CountRegular($data){
			
			$query = $this->db->query("SELECT count(employee.EmId)as CountRegular from employee JOIN btr ON employee.EmId=btr.EmId Where btr.annual='".$data."' AND employee.status='regular'");
			$result = $query->result();
		    return $result;  	
		}
		public function countrecords($data){
					   
			$query = $this->db->query("SELECT  count(EmId) as countrecords FROM btr WHERE EmId='".$data."' ORDER BY annual");		   
			$result = $query->result();
		    return $result;  	
		}
		
		
		function updateemployee($id,$data){
			$this->db->where('EmId', $id);
			$this->db->update('employee', $data);  
		}
		
		function updateeditrecord($id,$data){
			$this->db->where('BId', $id);
			$this->db->update('btr', $data);  
		}
		
		
		//add BTR
		public function addBtr($data){
			$this->db->insert("btr",$data);		
		} 
		//DELETE BTR
		public function DeleteRecord($id){
			$this->db->where('BId', $id);
			$this->db->delete('btr');    
		}
		public function DeleteEmployee($id){
			$this->db->where('EmId', $id);
			$this->db->delete('employee');    
		}
		public function DeleteEmployeeRecord($id){
			$this->db->where('EmId', $id);
			$this->db->delete('btr');    
		}
		
		/******************** end PHMs *************************/
		
		
		
		
		/************************************************           E        N          D       ****************************************/


		
	
	}	