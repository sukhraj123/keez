<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "phplogin";
    
    
    $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db)

    $username = $_POST['username']
    $password = $_POST['password']

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        nav('location:index.html');
    }
    if($row [$username] == $username && $row ['password'] == $password){
        echo "Welcome ".$username." You Are Succefully Logged in!!";
    }else{
        echo" <script>alert('Check Your Credentials')</script> ";
        echo" <script>location.replace('index.html')</script> ";
    }
    
    
    
    ?>