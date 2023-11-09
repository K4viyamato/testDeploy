<?php
    session_start();

    if (isset($_SESSION['username'])){
        // logged in
        session_destroy();
        echo "<script>location.href='index.php'</script>";
    } 
    

?>