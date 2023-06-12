<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic PHP Overview OOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php
            include("includes/person.inc.php");
            // $pet01 = new Pet();

            // echo $pet01->owner() . "<br>";

            // $person01 = new Person();
            // echo $person01->name();

            $person01 = new Person();
            echo $person01->name();

        ?>

    </body>
</html>