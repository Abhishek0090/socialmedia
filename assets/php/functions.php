<?php
    require_once 'config.php';
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die ('database not connected');
    //function for showing pages
    
    function showPage($page,$data=""){ 
    include("assets/pages/$page.php");
    }

    function validateSignupform($form_data){
        
    }
?>