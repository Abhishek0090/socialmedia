<?php 

    // include('assets/pages/header.php');
    // include('assets/pages/signup.php');
    // include('assets/pages/footer.php');

    require_once 'assets/php/functions.php';



    if(isset($_GET['signup'])){
        showPage('header',['page_title'=>'Pictogram - Signup']);
        showPage('signup');
    }
    showPage('footer');
    unset($_SESSION['error']) ;
     