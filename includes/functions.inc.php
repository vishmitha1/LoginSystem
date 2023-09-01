<?php
    function emptyInputSignup($username,$password,$repassword,$email,$userid){
        if(empty($email) || empty($password)  ||  empty($repassword) || empty($userid) || empty($username)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }
    function invalidUid($userid){
        if(preg_match("/^[a-zA-Z0-9]*$/",$userid)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    function  invalidEmail($email){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }
    function  pwdMatch($password,$repassword){
        if(($password !== $repassword)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }

    function uidExist($conn,$userid,$email){
        $sql="SELECT * FROM users WHERE usersUid=? OR usersEmail=? ;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../signup.php? error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"ss",$userid,$email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        if($row=mysqli_fetch_assoc($result)){
            mysqli_stmt_close($stmt);
            return $row;
        }
        else{
            return false;
        }
        
    }

    function uidExists($conn,$userid,$email){
        $stmt=$conn->prepare("SELECT * FROM users WHERE usersUid=? OR usersEmail=? ;");
        $stmt->bind_param("ss",$userid,$email);
        $stmt->execute();
        $stmt->bind_result($userid,$email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            return false;
        }
        else{
            return true;
        }

    }
    