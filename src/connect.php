<?php


session_start();
/**
 * @param
 * @return $db
 * @abstract This function return an connection to database MySql
 * 
 * **/
function connect(){

    require_once('config.php');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    return $db;
}

/**
 * 
 * @param $user $pwd $connection
 * @abstract This function compare the credentials from by the user, versus the server database
 * **/
function login($user, $pwd, $connection){
           
    if($_SERVER["REQUEST_METHOD"] == "POST") {
                   
       $sql = "SELECT id FROM tabla WHERE nombre = '$user' and clave = '$pwd'";
       $result = mysqli_query($connection, $sql);
       
       $count = mysqli_num_rows($result);
                     
       if($count == 1) {                                       
          
         session_register($user);
         $_SESSION['user'] = $user;
         header("location: home.php");

       }else {
          header("location: error_handler_page.php");       
       }       
    }
}

$connection = connect();

$myusername = mysqli_real_escape_string($connection, $_POST['email']);
$mypassword = mysqli_real_escape_string($connection, $_POST['password']); 

login($myusername, $mypassword, $connection);

   
?>