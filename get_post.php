<?php 

    /* ---- $_GET and $_POST superglobal --- */

    /* Getting data through forms using these superglobals */

    echo $_GET['name'];
    echo $_GET['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Matt&age=31">Click</a>