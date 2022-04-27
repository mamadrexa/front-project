<?php

include 'setting.php';
include 'db.php';


// A. validation

// B. Insert in DB

// 1. connect to DB - mysql - mysqli - PDO
$dbc = new db( $dbhost, $dbuser, $dbpass, $dbname ); // mysqli_connect

// 2. create query
$sql =	"SELECT * FROM product  LIMIT 10";
// 3. execute query
$result = $dbc -> query( $sql ); // mysqli_query
$productList = $result -> fetchAll();

//$username = $user['username'];
//$password = $user['password'];

// show form view
include 'productList_view.php';




// 4. close connection
$dbc -> close(); //mysqli_close

?>