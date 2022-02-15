<?php

class Moovie
{
  public $title;
  public $director;
  public $year;
  public $genres;
  public $length;
  public $language;
  public $maxScore;
  public $minScore = 0;

  public function __construct($title, $director, $year)
  {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
  }

//   Title
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }

//   Director
  public function getDirector()
  {
    return $this->director;
  }
  public function setDirector($director)
  {
    $this->director = $director;
  }

//   Year
  public function getYear()
  {
    return $this->year;
  }
  public function setYear($year)
  {
    $this->year = $year;
  }

//   Genres
  public function getGenres()
  {
    return $this->genres;
  }
  public function setGenres($genres)
  {
    if (is_array($genres)) {
      $this->genres = $genres;
    }
    die('non e un array');
  }

//   Length
  public function getLength()
  {
    return $this->length;
  }
  public function setLength($length)
  {
    $this->length = $length;
  }

//   Language
  public function getLanguage()
  {
    return $this->language;
  }
  public function setLanguage($language)
  {
    $this->language = $language;
  }

//   Max-Score
  public function getMaxScore()
  {
    return $this->maxScore;
  }
  public function setMaxScore($maxScore)
  {
    $this->maxScore = $maxScore;
  }
  
//   Min-Score
  public function getMinScore()
  {
    return $this->minScore;
  }
  public function setMinScore($minScore)
  {
    $this->minScore = $minScore;
  }

//   Calculate Avg-Score
  public function getAvgScore()
  {
    return ( ( $this->minScore + $this->maxScore ) / 2 );
  }
}

    // Film 1
    $movie = new Moovie('Back to the Future ', 'Robert Zemeckis ', '1985 ');
    $movie->setMinScore(4);
    $movie->setMaxScore(3);

    echo $movie->getTitle();
    echo $movie->getDirector();
    echo $movie->getYear();
    echo $movie->getAvgScore();
    
    // Film 2
    $movie = new Moovie('Avengers: Endgame ', 'Russo brothers ', '2019 ');
    $movie->setMinScore(5);
    $movie->setMaxScore(4);

    echo $movie->getTitle();
    echo $movie->getDirector();
    echo $movie->getYear();
    echo $movie->getAvgScore();


?>