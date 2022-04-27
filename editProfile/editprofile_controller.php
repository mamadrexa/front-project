<?php

include '../phps/security.php';
include '../phps/functions.php';


session_start();
if( ! Authentication :: check() ) { 
    redirect('../Login/login_controller.php');
    exit;	
    }
	if(Authorization :: Rolls() == 'admin'){
		redirect('../templates/relogin.html');
		exit;
	}	

	if( isset( $_POST['submit'] ) ){
		include '../phps/settings.php';
include '../phps/db.php';


//conect to db
		$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);	
//insert query
		$sql = "UPDATE users
		SET name = ?,
		pass = ?,
		email = ?,
		gender = ?
		WHERE  id = {$_SESSION['uid']} ";


//execute		
		$result = $dbc -> query($sql, $_POST['name'], $_POST['pass'], $_POST['email'], $_POST['gender']);
//close it
		$dbc-> close();
		redirect('../userPanel/userPanel_controller.php');
	}
	else{
		
		include 'editprofile_view.php';

	}



?>