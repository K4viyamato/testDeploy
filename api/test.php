<?php

    session_start();

    if (!isset($_SESSION['username'])){
        die('You are not allowed.');
    }

    echo 'content of test page';

?>