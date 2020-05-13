<?php
require 'connection.php';

$image = mysqli_real_escape_string($mysqli, $_POST['image']);
$title = mysqli_real_escape_string($mysqli, $_POST['title']);
$description = mysqli_real_escape_string($mysqli, $_POST['description']);
$topic1 = mysqli_real_escape_string($mysqli, $_POST['topic1']);
$topic2 = mysqli_real_escape_string($mysqli, $_POST['topic2']);

if (isset($_POST['action'])) {
    echo "<img src='" . $image . "'";
    echo '<br>' . '</br>';
    echo 'Title : '.$title.'<br>';
    echo 'Description : '.$description.'<br>';
    echo 'Topic 1 : '.$topic1.'<br>';
    echo 'Topic 2 : '.$topic2.'<br>';
}