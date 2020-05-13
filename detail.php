<?php
require 'connection.php';

$result = mysqli_query($mysqli,"SELECT * FROM noodles WHERE id = '".$_GET['id']."'");

$details = mysqli_fetch_assoc($result);

echo "<img src='" . $details['image'] . "'";
echo '<br>' . '</br>';
echo 'Title : '.$details['title'].'<br>';
echo 'Description: '.$details['description'].'<br>';
echo 'Flavor: '.$details['flavor'].'<br>';
echo 'Grams: '.$details['grams'].'<br>';
