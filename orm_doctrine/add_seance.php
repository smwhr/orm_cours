<?php

require_once("bootstrap.php");

$film_id = $argv[1];
$showtime = new DateTime($argv[2]);

$film = $entityManager->find("Film", $film_id);

$seance = new Seance();
$seance->setShowtime($showtime);

$seance->setFilm($film);

$entityManager->persist($seance);
$entityManager->flush();

echo 'Seance created '
    .' at '.$seance->getShowtime()->format("H:i:s")
    .' on '.$seance->getShowtime()->format("l j F")
    .' for film '.$film->getTitle()
    ."\n"
    ;