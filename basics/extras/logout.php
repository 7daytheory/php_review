<?php 

    session_start();

    session_destroy();
    header("Location: /php_review/sessions.php");