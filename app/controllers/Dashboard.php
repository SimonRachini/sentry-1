<?php

class Dashboard extends Controller {
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index(){
   

    $data = [
      'title' => 'Welcome'
    ];

    $this->view('dashboard/index', $data);
  }


  public function about($id){
    echo $id;
  }
}