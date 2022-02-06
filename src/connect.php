<?php



/****/
function connect(){

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'work_primade');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    return $db;
}



function login($user, $pwd, $connection){
    session_start();

    $error ="";
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
                   
       $sql = "SELECT id FROM tabla WHERE nombre = '$user' and clave = '$pwd'";
       $result = mysqli_query($connection, $sql);
       
       $count = mysqli_num_rows($result);
                     
       if($count == 1) {
          session_register("email");
          $error ="";
          $_SESSION['login_user'] = $myusername;
          
          header("location: list.php");
          
       }else {
          $error = "Your Login Name or Password is invalid";        
       }

       if($error != ""){
            echo $error;
       }
    }

}

$connection = connect();

$myusername = mysqli_real_escape_string($connection,$_POST['email']);
$mypassword = mysqli_real_escape_string($connection,$_POST['password']); 

login($myusername, $mypassword, $connection);


   

    

?>