<!-- CST8285 Assignment 2 group 12:

Hongxiu Guo:  implement the database connection and close connection function
-->
<?php
//connect to the database
define("DB_SERVER", "localhost");
define("DB_USER", "myblog");
define("DB_PASS", "123456");
define("DB_NAME", "myblog");

//mysqli_connect(host, username, password, dbname ) returns a new connection to the MySQL server 
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);//connecting to the database

//check the connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}


function close_connection($conn){
    mysqli_close($conn);
}
?>
