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
            class Chef {
                function makeChicken() {
                    echo "Making chicken <br>";
                }
                function makeSalad() {
                    echo "Making salad <br>";
                }
                function makeSpecialDish() {
                    echo "Making special dish <br>";
                }
            }
       
            class ItalianChef extends Chef {
                function makePasta() {
                    echo "Making pasta <br>";
                }
                // overriding makeSpecialDish
                function makeSpecialDish() {
                    echo "Making cheese pasta <br>";
                }
            }
       ?>
       
    </body>
</html>