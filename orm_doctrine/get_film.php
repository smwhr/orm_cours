<?php

require_once("bootstrap.php");
$filmRepository = $entityManager->getRepository("Film");

$film = $filmRepository->findOneBy(["id" => $argv[1]]);

$seances = $film->getSeances();

echo $film->getTitle()
      ." (".$film->getReleaseYear().")"
      ."\n";

if(count($seances) > 0){
  foreach($seances as $seance){
    echo "\t -"
         .$seance->getShowtime()->format("l j F : H:i:s")
         ."\n";
  }
}else{
  echo "\tNo show time for this film \n";
}