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

        <form action="site.php" method="get">
            Name: <input type="text" name="name">
            Age: <input type="number" name="age">

            <input type="submit" >
        </form>

        <?php
            echo $_GET["name"];
            echo $_GET["age"];

        ?>
        <script src="" async defer></script>
    </body>
</html>