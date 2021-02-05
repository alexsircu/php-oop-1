<?php 
  class Book {

    public $title;
    public $author;
    public $price;
    public $genre;

  }

  $firstBook = new Book();
  $firstBook->title = "Le vostre zone erronee";
  $firstBook->author = "Wayne W. Dyer";
  $firstBook->price = 10.00;
  $firstBook->genre = "Psicologico";
  var_dump($firstBook);

  $secondBook = new Book();
  $secondBook->title = "Pensieri lenti e veloci";
  $secondBook->author = "Daniel Kahneman";
  $secondBook->price = 17.00;
  $secondBook->genre = "Psicologico";
  var_dump($secondBook);

  $thirdBook = new Book();
  $thirdBook->title = "Il fu Mattia Pascal";
  $thirdBook->author = "Luigi Pirandello";
  $thirdBook->price = 6.00;
  $thirdBook->genre = "Romanzo";
  var_dump($thirdBook);

  echo $thirdBook->title;
