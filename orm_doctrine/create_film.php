<?php

require_once("bootstrap.php");

$film = new Film();
$film->setTitle($argv[1]);
$film->setDuration($argv[2]);
$film->setReleaseDate(new DateTime($argv[3]));

$entityManager->persist($film);
$entityManager->flush();

echo "New film created : " . $film->getId() . "\n";

