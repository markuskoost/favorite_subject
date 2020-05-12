<?php
require 'connection.php';

$title = mysqli_real_escape_string($mysqli, $_REQUEST['title']);
$description = mysqli_real_escape_string($mysqli, $_REQUEST['description']);
$flavor = mysqli_real_escape_string($mysqli, $_REQUEST['flavor']);
$grams = mysqli_real_escape_string($mysqli, $_REQUEST['grams']);
$image = $_REQUEST['image'];

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO noodles(title, description, image, flavor, grams) VALUES ('$title', '$description', '$image', '$flavor', '$grams')";
}

if (mysqli_query($mysqli, $sql)) {
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

// Close connection
mysqli_close($mysqli);