<?php
require 'connection.php';

$query = "SELECT * FROM noodles LIMIT 3";

if ($result = $mysqli->query($query)) {
    while ($marker = $result->fetch_assoc()) {
        $markers[] = [
            'info' => [
                'name' => 'Markus Koost',
                'description' => 'Noodles'
            ],
            'data' => [
                'title' => $marker['title'],
               'description' => $marker['description'],
                'image' => $marker['image'],
                'topic1'=> $marker['flavor'],
                'topic2' => $marker['grams']
            ],
        ];
    }
    $result->close();
}
header('Content-Type: application/json');
echo json_encode($markers);