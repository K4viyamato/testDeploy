<?php
    session_start();

    if (isset($_SESSION['username'])){
        // logged in
        session_destroy();
        header('Location: /index.php');
    } 
    

?>