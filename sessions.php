<?php
    //Sessions
    /* 
    Sessions are a way to store information (in variables) to be used across multiple pages(unlike cookies) they are stored on the server. 
    Commonly used with login forms for example.
    */

    //Start Session
    session_start();
    
    //General Form
    if(isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', 
        FILTER_SANITIZE_SPECIAL_CHARS);
    
        //Obviously never store plaintext password in DB - HASH it
        $password = $_POST['password'];

        if($username === "Matt" && $password === "password") {
            $_SESSION['sess_username'] = $username;
            header('Location: ../php_review/extras/dashboard.php');
        } else {
            echo "Credentials do not match or username doesn't exist";
        }
    }

    ?>
    
    <?php echo "<br><br><h3>Form</h3>"; ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>

