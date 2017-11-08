<?php

require_once("bootstrap.php");

// $films = Film::orderBy('title', 'ASC')->get();
$films = Film::all();
// $films = Film::where('duration', '<', 150)
             // ->orderBy('title', 'ASC')
             // ->get()
             // ;

foreach($films as $film){
  
  $release_date = new DateTime($film->release_date);
  $seances = $film->seances;
  echo "[".$film->id."] ".
       $film->title
       ." (".
       $release_date->format("Y")
       .")"
       ."\n";
      foreach($seances as $seance){
        $showtime = new DateTime($seance->showtime);
        echo "\t -"
             .$showtime->format("l j F : H:i:s")
             ."\n";
      }
}