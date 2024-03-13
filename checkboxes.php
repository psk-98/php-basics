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
     <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apple" ><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges" ><br>
        Mangoes: <input type="checkbox" name="fruits[]" value="mangoes" ><br>
        <input type="submit">
    </form>
    <?php 
        $fruits = $_POST['fruits'];
        echo $fruits[0];
    ?>
    </body>
</html>