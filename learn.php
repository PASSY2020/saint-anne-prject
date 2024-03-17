

<?php
$names = array("eric","byuku","pass","ayinkamiye");

print_r( $names);

$myArray = array("apple", "banana", "orange", "grape", "kiwi");
print_r($myArray);
$randomKey = array_rand($myArray);

// Use the random key to access the corresponding element
$randomElement = $myArray[$randomKey];

echo "Randomly selected element: " . $randomElement;
?>

