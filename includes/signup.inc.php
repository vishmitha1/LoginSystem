<?php
if(isset($_POST["Register"])){
    $username=$_POST['name'];
    $password=$_POST['pwd'];
    $repassword=$_POST['repwd'];
    $userid=$_POST['uid'];
    $email=$_POST['email'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInputs=emptyInputSignup($username,$password,$repassword,$email,$userid);
    $invalidUid=invalidUid($userid);
    $invalidEmail=invalidEmail($email);
    $pwdMatch=pwdMatch($password,$repassword);
    $uidExist=uidExist($conn,$userid,$email);

    if($emptyInputs != false){
        header("Location: ../signup.php?error=Empty Inputs");
        exit();
    }
    if($invalidUid != false){
        header("Location: ../signup.php?error=Invalid uid");
        exit();
    }
    if($pwdMatch != false){
        header("Location: ../signup.php?error=password not matched");
        exit();
    }
    if($invalidEmail != false){
        header("Location: ../signup.php?error=password not matched");
        exit();
    }
    if($uidExist != false){
        header("Location: ../signup.php?error=username alredy exist");
        exit();
    }
    createUser($conn,$password,$email,$userid,$username);

}

else{
    header("Location: ../signup.php?error=Nosubmit");
    exit();
}