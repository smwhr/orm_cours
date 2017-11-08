<?php

require_once("bootstrap.php");

$qb = $entityManager->createQueryBuilder();
$q  = $qb->select('f')
         ->orderBy('f.release_date', 'DESC')
         ->from("Film", 'f')
         ->where(
          $qb->expr()->lt('f.duration', 150)
         )
         ->getQuery()
         ;

$films = $q->getResult();

foreach($films as $film){
  echo "[".$film->getId()."] ".
       $film->getTitle()
       ." (".
       $film->getReleaseDate()->format("Y")
       .")"
       ."\n";
}