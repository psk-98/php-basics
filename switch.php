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
            $grade = $_POST['grade'];

            switch(strtoupper($grade)) {
                case 'A':
                    echo "You did amazing!";
                    break;
                case 'B':
                    echo "You did pretty good!";
                    break; 
                case 'C':
                    echo "You did well!";
                    break;
                case 'D':
                    echo "You did poorly!";
                    break;
                case 'F':
                    echo "You did FAILED!";
                    break; 
                default:
                    echo "Invalid grade!";
                    break;
            }
       ?>
    </body>
</html>