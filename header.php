<!DOCTYPE html>
<html >
<head>
    <title>Login test</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: blueviolet;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color:aquamarine;
    }

    input[type=text],input[type=email], select, textarea,input[type=password] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    }

   

    input[type=submit] {
    width: 100%;
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }

    .form {
        width:70%;
        margin-left: auto;
        margin-right: auto;
        text-align: center ;
    }

    

    

    </style>
</head>
<body>
    <ul>
    <li><a class="active" href="index.php">Home</a></li>

    <li style="float: right;" ><a href="login.php">Login</a></li>
</ul>
    <div class="container" style="margin-right:5%;" >