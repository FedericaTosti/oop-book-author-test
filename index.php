<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book-author-oop</title>
  </head>
  <body>
    <!-- creare classe Book (title, author, price) + classe Author (name, lastname)
         definire per entrambe le classi costruttore che accetta tutti gli attributi
         definire per entrambe le classi metodo printMe()
    -->

    <?php

      class Author {
        private $name;
        private $lastname;

        public function __construct($name, $lastname) {
          $this-> name = $name;
          $this -> lastname = $lastname;
        }

        public function printMe() {
          // echo "NOME=> " . $this -> name
          //    . " ,COGNOME=> " . $this -> lastname . "<br>";
          echo $this -> name . " " . $this -> lastname . "<br>";
        }
      }

      class Book {
        private $title;
        private $author;
        private $price;

        public function __construct($title, $author, $price) {
          $this -> title = $title;
          $this -> author = $author;
          $this -> price = $price;
        }

        public function printMe() {
          echo "TITOLO: " . $this -> title
             . "<br>PREZZO: " . $this -> price
             . "<br>AUTORE: ";

          $this -> author -> printMe();
        }
      }

      $author = new Author ("Pinco", "Pallo");
      $book = new Book ("titolo", $author, "prezzo");

      $book -> printMe();

    ?>

  </body>
</html>
