<?php 

/**
 *  @Entity @Table(name="seance")
 **/
class Seance{
  /**
   * @var int
   * @Id @Column (type="integer") @GeneratedValue
   */
  protected $id;

  /**
   * @var DateTime
   * @Column(type="datetime")
   */
  protected $showtime;

  /**
   * @var Film
   * @ManyToOne(targetEntity="Film", inversedBy="seances")
   **/
  protected $film;

  public function getId(){
    return $this->id;
  }
  public function getShowtime(){
    return $this->showtime;
  }
  public function setShowtime($showtime){
    $this->showtime = $showtime;
  }
  public function setFilm($film){
    $this->film = $film;
  }

}