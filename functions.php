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
        <form method="post" action="functions.php">
            <input type="text" name="name">
        </form>    

        <?php 
            // function sayHi($name) {
            //     echo "Hello $name!";

            // }

            // sayHi($_POST["name"]);


            //function with return

            function cubeIt($number) {

                return  pow( $number,3);
            }

            $cubeResult = cubeIt(4);

            echo "cubed 4 is $cubeResult";
        ?>
    </body>
</html>