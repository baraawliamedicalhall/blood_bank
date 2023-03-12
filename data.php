<?php
// Read JSON file
$json = file_get_contents('data.json');

// Decode JSON data into an array of objects
$data = json_decode($json);

// Loop through the data and display each object
foreach ($data as $item) {
    echo "Name: " . $item->name . "<br>";
    echo "Age: " . $item->age . "<br>";
    echo "City: " . $item->city . "<br><br>";
    if (isset($item->email)) {
        echo "Email: " . $item->email . "<br><br>";
    } 
}
?>

