<?php

require_once("bootstrap.php");

$seance = new Seance();
$seance->film_id = $argv[1];
$seance->showtime = $argv[2];

$seance->save();

echo "Saved\n";

