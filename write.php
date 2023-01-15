<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRITE</title>
</head>
<body>
    
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $comment = $_POST['comment'];


        $date = date('Y-m-d');
        $time = date('H-i-s');

        $file = fopen('./data/data.txt', 'a');

        fwrite($file, $date.",".$time.",".$name.",".$email.",".$age.",".$comment."\n");
        fclose($file);

        header("Location:index.php");
        exit();
        
    ?>


</body>
</html>
