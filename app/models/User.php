<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function register($data){
      $this->db->query("INSERT INTO user (FIRST_NAME, LAST_NAME, EMAIL, USER_PASSWORD) VALUES(:first_name, :last_name, :email, :password)");

      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

    }

    
		public function login($email, $password){
      $this->db->query("SELECT * FROM user WHERE email = :EMAIL");
      $this->db->bind(':EMAIL', $email);

      $row = $this->db->single();

      $password=md5($password);
      $db_password = $row->USER_PASSWORD;

			if($password == $db_password){
        return $row;
      } else {
        return false;
      }
    }
    

    public function checkEmail($email){
		$this->db->query("SELECT * FROM user WHERE email = :EMAIL");
		$this->db->bind(':EMAIL', $email);
		
		
			$row = $this->db->single();
			if(  $this->db->rowCount()>0 ){
			return true;
			}else{
				return false;
			}
			
      }

      public function getUser($id)
      {
        $this->db->query("SELECT * FROM user WHERE USER_ID = :id"); 
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;

      }

 
  }