<?php

class Dashboard extends Controller {
  public function __construct()
  {
    $this->userModel = $this->model('User');
    $this->roomModel = $this->model('Room');
  }

  public function index(){

    $id = $_SESSION['user_id'];
   
    $rooms = $this->roomModel->getRooms($id);
    $user = $this->userModel->getUser($id);

    $data = [
      'title' => 'Welcome',
      'rooms' => $rooms,
      'user' => $user
    ];

    $this->view('dashboard/index', $data);
  }



 
}