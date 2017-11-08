<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once("bootstrap.php");

Capsule::schema()->create("seances", function($table){
    $table->increments('id');
    $table->dateTime('showtime');
    $table->integer('film_id');
  });