<?php
    session_start();

    if (isset($_SESSION['username'])){
        // logged in
        header('Location: /index.php');
        session_destroy();
    } 
    

?>