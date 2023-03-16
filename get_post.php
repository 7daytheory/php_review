<?php 

    /* ---- $_GET and $_POST superglobal --- */

    /* Getting data through forms using these superglobals */
    
    if(isset($_GET['name'])) {
    echo "Name : " . $_GET['name'] . "<br>";
    } else {
        echo "No Name variable found in URL<br>";
    }

    if(isset($_GET['age'])) {
        echo "Age : " . $_GET['age'] . "<br>";
        } else {
            echo "No Age variable found in URL<br>";
        }
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Matt&age=31">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Name</label>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>
</form>