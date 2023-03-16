<?php 
//Before Sanitize
// if(!empty($_GET)){
//     echo "Age : " . $_GET['age'] . "<br>";
//     echo "Name : " . $_GET['name'] . "<br>";
//  }

// echo "<h2>POST Response</h2><br>";
// if(isset($_POST['submit'])) {
//     echo "Name : " . $_POST['name'] . "<br>";
//     echo "Age : " . $_POST['age'] . "<br>";
// }

//Sanitize inputs

if(isset($_POST['submit'])) {
    //Will display any code injected but it will not run it
    $name = filter_input(INPUT_POST, 'name', 
    FILTER_SANITIZE_SPECIAL_CHARS);

    //Another example for sanitizing inputs
    $age = filter_var($_POST['name'],
    FILTER_SANITIZE_SPECIAL_CHARS);

    echo "Name : ${name} <br> Age: $age";
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Matt&age=31">Click</a>

<?php echo "<br><br><h3>Form</h3>"; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age">
    </div>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
</form>