<?php

header("Content-Type: application/json");

require_once '../config/database.php';
require_once '../models/Playlist.php';

$database = new Database();
$db = $database->getConnection();

$playlist = new Playlist($db);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $playlists = $playlist->getAll();
    echo json_encode($playlists);
}
