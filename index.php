<?php 
  class Book {

    public $title;
    public $author;
    public $price;
    public $genre;
    public $discount;

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

  $firstBook = new Book();
  $firstBook->title = "Le vostre zone erronee";
  $firstBook->author = "Wayne W. Dyer";
  $firstBook->price = 10.00;
  $firstBook->genre = "Psicologico";
  var_dump($firstBook);

  $firstBook->setDiscount(10);
  echo "Il prezzo del libro scontato è di: ".$firstBook->getDiscount()." €";

  $secondBook = new Book();
  $secondBook->title = "Pensieri lenti e veloci";
  $secondBook->author = "Daniel Kahneman";
  $secondBook->price = 17.00;
  $secondBook->genre = "Psicologico";
  var_dump($secondBook);

  $secondBook->setDiscount(17);
  echo "Il prezzo del libro scontato è di: ".$secondBook->getDiscount()." €";

  $thirdBook = new Book();
  $thirdBook->title = "Il fu Mattia Pascal";
  $thirdBook->author = "Luigi Pirandello";
  $thirdBook->price = 6.00;
  $thirdBook->genre = "Romanzo";
  var_dump($thirdBook);

  $thirdBook->setDiscount(6);
  echo "Il prezzo del libro scontato è di: ".$thirdBook->getDiscount()." €";;

  // echo $thirdBook->title;
