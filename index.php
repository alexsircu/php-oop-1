<?php 
  class Book {

    public $title;
    public $author;
    public $price;
    public $genre;
    public $discount;

    //COSTRUTTORE
    public function __construct($title, $author, $price, $genre) {
      $this->title = $title;
      $this->author = $author;
      $this->price = $price;
      $this->genre = $genre;
    }

    // METODI
    public function setDiscount($price) {
      if($price >= 10) {
        $this->discount = 2;
      }
    }

    public function getDiscount() {
      return $this->price - $this->discount;
    }

  }
  
  // primo libro
  $firstBook = new Book("Le vostre zone erronee", "Wayne W. Dyer", 10.00, "Psicologico");
  var_dump($firstBook);

  $firstBook->setDiscount(10);
  echo "Il prezzo del libro scontato è di: ".$firstBook->getDiscount()." €";

  //secondo libro
  $secondBook = new Book("Pensieri lenti e veloci", "Daniel Kahneman", 17.00, "Psicologico");
  var_dump($secondBook);

  $secondBook->setDiscount(17);
  echo "Il prezzo del libro scontato è di: ".$secondBook->getDiscount()." €";

  //terzo libro
  $thirdBook = new Book("Il fu Mattia Pascal", "Luigi Pirandello", 6.00, "Romanzo");
  var_dump($thirdBook);

  $thirdBook->setDiscount(6);
  echo "Il prezzo del libro scontato è di: ".$thirdBook->getDiscount()." €";;

  // echo $thirdBook->title;
