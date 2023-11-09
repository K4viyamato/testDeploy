<?php 
    
    session_start();

    
    
    $username = "user";
    $password = "1234";

    if ( $_POST['name'] == $username && $_POST['pwd'] == $password){
        echo "You logged in";
        $_SESSION['username'] = $_POST['name'];
    } else {
        die("incorrect password");
    }
    
    if(isset($_POST['remember'])){
        setCookie("username", $_POST['name'], time()+86400);
        setCookie("password",  $_POST['pwd'], time()+86400);
    }

    echo "<br><a href='logout.php'>Logout</a><br>";

     
?>

    
?>