<?php
    require_once 'config.php';
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die ('database not connected');


    //function for showing pages
    function showPage($page,$data=""){ 
    include("assets/pages/$page.php");
    }

    //function for showing error
    function showError($field){
        if(isset($_SESSION['error'])){
            $error = $_SESSION['error'];
            if($field==$error['field']){
            ?>
                <div class="alert alert-danger my-2" role="alert">
            <?=$error['msg']?>
            </div>
             <?php
            }
        }
    }


    //function for showing prev data 
    
        function showFormData($field){
            if(isset($_SESSION['formdata'])){
                $formdata = $_SESSION['formdata'];
                return $formdata[$field];
            }
        }


    //function for validating the signup form
    function validateSignupform($formdata){
    $response = array();
    
    if(!$form_data['password']){
        $response['msg'] = "password is not given";  
        $response['status'] = false;
        $response['field'] = "password";
  }

        
        if(!$form_data['username']){
            $response['msg'] = "username is not given";  
            $response['status'] = false;
            $response['field'] = "username";
        }


        if(!$form_data['email']){
            $response['msg'] = "email is not given";  
            $response['status'] = false;
            $response['field'] = "emaill";
        }


    if(!$form_data['first_name']){
          $response['msg'] = "first name is not given";  
          $response['status'] = false;
          $response['field'] = "first name";
    }

    if(!$form_data['last_name']){
          $response['msg'] = "last name is not given";  
          $response['status'] = false;
          $response['field'] = "last name";
    }
            
    return $response;
    
}    
    

?>