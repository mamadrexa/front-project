<?php

include '../phps/settings.php';
include '../phps/db.php';
include '../phps/security.php';
include '../phps/functions.php';



session_start();
if( ! Authentication :: check() ) { 
    redirect('../Login/login_controller.php');
    exit;	
    }
	if(Authorization :: Rolls() == 'Nuser'){
		redirect('../templates/403.html');
		exit;
	}

// 1. connect to DB - mysql - mysqli - PDO
$dbc = new db( $dbhost, $dbuser, $dbpass, $dbname ); // mysqli_connect

// 2. create query
$sql =	"SELECT * FROM messages order by id asc LIMIT 10";
// 3. execute query
$result = $dbc -> query( $sql ); // mysqli_query
$productList = $result -> fetchAll();


// show form view
include 'messageList_view.php';




// 4. close connection
$dbc -> close(); //mysqli_close

?>