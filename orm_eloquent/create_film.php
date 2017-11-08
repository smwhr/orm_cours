<?php

require_once("bootstrap.php");

$film = new Film();
$film->title = $argv[1];
$film->duration = $argv[2];
$film->release_date = $argv[3];

$film->save();

echo "New film created : " . $film->id . "\n";