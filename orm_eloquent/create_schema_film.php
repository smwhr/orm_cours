<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once("bootstrap.php");

Capsule::schema()->create("films", function($table){
    $table->increments('id');
    $table->string('title');
    $table->date('release_date');
    $table->integer('duration');
  });