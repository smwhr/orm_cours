<?php

use Illuminate\Database\Eloquent\Model;

class Seance extends Model{
  public $timestamps = false;
  protected $fillable = ["showtime"];
  
  public function film(){
    return $this->belongsTo('Film');
  }
}
