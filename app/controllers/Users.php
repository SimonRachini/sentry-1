<?php
class Users extends Controller{

    public function __construct()
  {
    $this->userModel = $this->model('User');
  }

public function register(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $data = [
        'first_name' => $_POST['FIRST_NAME'],
        'last_name' => $_POST['LAST_NAME'],
        'email' => $_POST['EMAIL'],
        'password' => $_POST['USER_PASSWORD'],
        'email_err' => ''
        
    ];

    // Check email
    if($this->userModel->checkEmail($data['email'])){
        $data['email_err'] = 'Sorry... email already taken';
    } 

    if(empty($data['email_err'])){
        // Validated
         // Hash password
    $data['password'] = md5($data['password']);  
           // Register user
    if($this->userModel->register($data)){
        redirect('users/login');
    } else{
        die('something wrong');
    }

    }   else{
        // lOAD VIEW WITH ERRORS
        $this->view('users/register', $data);
    }

} else {
    // Init data
    $data = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
        'email_err' => ''
        
    ];

    // load view
    $this->view('users/register', $data);
}




}

public function login(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $data = [
            'email' => $_POST['EMAIL'],
            'password' => $_POST['USER_PASSWORD'],
            'email_err' => '',
            'password_err' => '',
            
        ];

        if($this->userModel->checkEmail($data['email'])){
            //$data['email_err'] = '';
        } else{

            $data['email_err'] = 'User not found';
        }

        if(empty($data['email_err'])){
            $loggedUser = $this->userModel->login($data['email'], $data['password']);

            if($loggedUser){

                $this->userSession($loggedUser);
            }else{
                $data['password_err'] = "Incorrect Password";
                $this->view('users/login', $data);

            }
        } else {
                  
        $this->view('users/login', $data);
        }
       
} else{
    
    $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
        
    ];

    $this->view('users/login', $data);

}

}

public function userSession($user){

    $_SESSION['user_id']= $user->USER_ID;
    redirect('dashboard');
}

public function logout(){

    unset($_SESSION['user_id']);
    session_destroy();

    redirect('users/login');
}

}
