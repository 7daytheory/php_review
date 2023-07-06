<?php

// function groupByOwners(array $files) : array
// {
//     return [];
// }

// $files = array(
//     "Input.txt" => "Randy",
//     "Code.py" => "Stan",
//     "Output.txt" => "Randy"
// );
// var_dump(groupByOwners($files));

// Return an associative array in any order that contains file names of each owner names in any order

//Answer

/* 
To achieve the desired functionality of grouping files by owner names and returning an associative array with the file names as values and the owner names as keys, you can modify the code as follows:
    */
    
function groupByOwners(array $files): array
{
    $groupedFiles = array();

    foreach ($files as $fileName => $ownerName) {
        if (!isset($groupedFiles[$ownerName])) {
            $groupedFiles[$ownerName] = array();
        }
        $groupedFiles[$ownerName][] = $fileName;
    }

    return $groupedFiles;
}

$files = array(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

var_dump(groupByOwners($files));