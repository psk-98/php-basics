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
        <form action="arrays.php" method="post">
            <input type="text" name="student"  ><br>
            <input type="submit">
        </form>
        <?php 
            $friends = array("Kev",400,"John", "Jim", false, 25.5);
            $friends[0] = "Dwight"; 
            echo $friends[2];
            echo count($friends); //length of array
            $grades = array("Jim"=>"A+", "John"=>"C+", "Dwight"=>"B-");
            // echo $grades["Dwight"];
            echo "<br>Grades section<br>";
            echo $grades[$_POST["student"]]
        ?>
    </body>
</html>