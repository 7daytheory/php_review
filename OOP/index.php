<?php
    include "includes/person.inc.php";
    include "includes/newclass.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic PHP Overview OOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php
            /******* Basic setting up class instances with objects, calling class and displaying values *******/
            //include("includes/person.inc.php");
            // $pet01 = new Pet();

            // echo $pet01->owner() . "<br>";

            // $person01 = new Person();
            // echo $person01->name();

            // $person01 = new Person();
            // echo $person01->name();

            //Call class
            // $person01 = new Person();
            // $person01->setName("Matthew");
            // echo $person01->name . "<br>";

            // $person02 = new Person();
            // $person02->setName("Daniel");
            // echo $person02->name;

            /******* Setting prop values when setting up instance of class *******/

            //$person1 = new Person("Matthew", 32, "Blonde", "5'11"); //Pass in properties to Class
            // echo "Name: " . $person1->name . " Age :" . $person1->age . " Hair: " . $person1->hair . " Height: " . $person1->height . " Company : " . $person1->company;

            // $person1->setName("John");
            // echo "<br>" . $person1->name;
            // echo $person1->getName();


            // /***** Deleting an object ******/

            // $object = new NewClass();
            // unset($object); //delete/unset object using built in method
            // echo $object->getProperty(); // Can't get values bc it was unset above

            /******** Static methods and properties ********/

            $person1 = new Person("Matthew", 32, "Blonde", "5'11");
            echo $person1->getName();

        ?>

    </body>
</html>