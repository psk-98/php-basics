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
       <form method="post" action="switch.php">
        What was your grade?
        <input type="text" name=grade>
       </form>
       <?php 
            $index = 1;
        //  while(condition) {}
        //  do {

        //  }while(condition);
        for($i = 0; $i < 5; $i++){
            echo $i;
        }
       ?>
    </body>
</html>