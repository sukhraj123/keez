<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "loginsystem";
    
    
    $conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $db)

    $username = $_POST['username']; 
    $usermail = $_POST['usermail']; 
    $userpass = $_POST['userpass']; 
    

    $sql = "INSERT into data(username, usermail, userpass) VALUES('$username', '$usermail', '$userpass')";
    if(mysqli_query($conn, $sql)){
        echo "Resgister Complete";
    }else{
        echo"Something Went Wrong:";
    }
    ?>