<?php

  require_once('../api/main.php');
  
  API::session_init();

  if(API::check_session_on($_SESSION['user'])){  
    
    API::handle_permission_denied();      
  }else{  
    $api = new API();
?>