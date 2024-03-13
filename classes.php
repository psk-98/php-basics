<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <?php 
          class Book{
            var $title;
            var $author;
            var $pages;

            function __contruct( $_title,$_author, $_pages){
                $this->title = $_title;
                $this->author = $_author;
                $this->pages = $_pages;
            }
          } 
        //   using constructor 
          $book2 = new Book("Harry Potter","JK Rowling",400);
          $book1 = new Book;
          $book1->title = "PHP";
          $book1->author = "Author Name";
          $book1->pages = 300;
       
          echo $book1->title;
          echo $book2->title;
       ?>
       
    </body>
</html>