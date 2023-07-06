<?php 

    $file = 'extras/textfile.txt'; //Aleady existing file
    //$file = 'extra/names.txt; // Adds content to new file

    if(file_exists($file)) {
        // echo readfile($file);

        $handle = fopen($file, 'r'); //r is just read
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w'); // w is write 
        $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Matt'; //PHP_EOL gives linebreak within the file
        fwrite($handle, $contents); // Passes in contents to the file
        fclose($handle);
    }