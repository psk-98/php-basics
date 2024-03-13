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

    <!-- getters and setters  -->
       <?php 
          class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($_rating) {
                if ($_rating=="G" || $_rating=="PG" || $_rating=="PG-13" || $_rating=="R" || $_rating=="NR")
                    $this->rating = $_rating;
                else 
                    $this->rating = "NR";
            }
          }

          $avengers = new Movie("Avengers","PG-13");
          echo $avengers->getRating();
       
       ?>
       
    </body>
</html>