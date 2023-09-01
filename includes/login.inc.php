<?php
if(isset($_POST['submit'])){
    $username=$_POST['name'];
    $password=$_POST['password'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyinputs($username,$password) !== false){
        exit();
    }
    login($username,$password)
}
else{
    header("Location: ../signup.php");
    exit();
}