<?php


    session_start();
    
    function loggedIn(){
	if(!($_SESSION['user_id'])){
		return true;
    }
    else{

        return false;
    }}
?>