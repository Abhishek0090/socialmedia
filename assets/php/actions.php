<?php

require_once 'functions.php';

   if(isset($_GET['signup'])){
      $response = validateSignupform($_POST);             
      print_r($response);
   }

?>