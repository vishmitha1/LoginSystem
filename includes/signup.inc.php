<?php
if(isset($_POST['submit'])){
    $username=$_POST['name'];
    $password=$_POST['pwd'];
    $repassword=$_POST['repwd'];
    $userid=$_POST['uid'];
    $email=$_POST['email'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInputs=emptyInputSignup($username,$password,$repassword,$email,$userid);
    $invalidUid=invalidUid($userid);
    $pwdMatch=pwdMatch($password,$repassword);
    $uidExist=uidExist($conn,$userid,$email);

    if($emptyInputs !== false){
        header("Location: ../signup.php ? error=Empty Inputs");
        exit();
    }
    if($invalidUid !== false){
        header("Location: ../signup.php ? error=Invalid uid");
        exit();
    }
    if($pwdMatch !== false){
        header("Location: ../signup.php ? error=password not matched");
        exit();
    }
    if($uidExist !== false){
        header("Location: ../signup.php ? error=username alredy exist");
        exit();
    }


    login($username,$password)
}  
else{
    header("Location: ../signup.php");
    exit();
}