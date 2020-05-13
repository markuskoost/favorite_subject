<?php
require 'connection.php';

if ($_GET['limit']) {
    $limitsql = ' limit 0, ' . $_GET['limit'];
} else {
    $limitsql = '';
}

$query = "SELECT * FROM noodles WHERE 1" . $limitsql;

$noodles =
    [
        'info' => [
            'name' => 'Markus Koost',
            'description' => 'Noodles'
        ],
    ];

if ($result = $mysqli->query($query)) {
    while ($noodle = $result->fetch_array()) {
        $noodles['data'][] =
            [
                'title' => $noodle['title'],
               'description' => $noodle['description'],
                'image' => $noodle['image'],
                'topic1'=> $noodle['flavor'],
                'topic2' => $noodle['grams']
        ];
    }
    $result->close();
}
header('Content-Type: application/json');
echo json_encode($noodles);