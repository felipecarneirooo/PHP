<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nome: <input type="text" name="fname">
        <input type="submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['fname'];
        if (empty($name)){

            echo "<br>";
            echo "Este campo esta vazio!"; 
        }
        else {
            echo $name;
        }
    }

    ?>

</body>
</html>