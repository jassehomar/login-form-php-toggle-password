<?php

session_start();

if(isset($_POST['toggler'])){

    if($_POST['toggler'] == 'show'){
        $_SESSION['password_field_type'] = 'text';
        $_SESSION['toggle'] = 'hide';
    }else{
        $_SESSION['password_field_type'] = 'password';
        $_SESSION['toggle'] = 'show';
    }
   
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    
}
header('Location: index.php');
exit;