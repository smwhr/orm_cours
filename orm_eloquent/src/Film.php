<?php

use Illuminate\Database\Eloquent\Model;

class Film extends Model{
  public $timestamps = false;
  protected $fillable = ["title", "release_date", "duration"]; 

  public function seances(){
    return $this->hasMany('Seance');
  }
}
