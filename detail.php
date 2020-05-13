<?php
require 'connection.php';

$image = $_POST['image'];
$title = $_POST['title'];
$description = $_POST['description'];
$topic1 = $_POST['topic1'];
$topic2 = $_POST['topic2'];

if (isset($_POST['action'])) {
    echo "<img src='" . $image . "'";
    echo '<br>' . '</br>';
    echo 'Title : '.$title.'<br>';
    echo 'Description : '.$description.'<br>';
    echo 'Topic 1 : '.$topic1.'<br>';
    echo 'Topic 2 : '.$topic2.'<br>';
}