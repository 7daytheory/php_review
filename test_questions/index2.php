<?php

//Question
// function unique_names(array $array1, array $array2): array
// {
//     return [];
// }

// $names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
// echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia


//Answer
function unique_names(array $array1, array $array2): array
{
    $uniqueNames = array_unique(array_merge($array1, $array2));
    sort($uniqueNames); // Optional - doesn't ask to sort names
    return $uniqueNames;
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // Output: Ava, Emma, Olivia, Sophia