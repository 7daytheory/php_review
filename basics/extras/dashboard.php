<?php 
    session_start();

    if(isset($_SESSION['sess_username'])) {
        echo "<h1>Welcome " . $_SESSION['sess_username'] . "</h1>";
        echo "<h2>This is your admin dashboard!</h2>";
        echo "<a href='logout.php'>Logout</a>";
    } else {
        echo "<h1>Welcome Guest!<br>";
        echo "<a href='../sessions.php'>Go Back</a>";
    }