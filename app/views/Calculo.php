<!DOCTYPE html>  <!--view  Calculo.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo URL_BASE."calculo/somar/" ?>" method="post">
        VAlor de A: <input type="text" name="a" value= "<?php echo isset($a) ? $a : "" ?>">

        VAlor de B: <input type="text" name="b" value= "<?php echo isset($b) ?$b : "" ?>">

        <input type="submit" value="Cadastrar">


    </form>
    <?php

    if(isset($resultado)){
      echo "<p> o resultado é: {$resultado} ";
    } else {
        $resultado = "";
    } 
    ?>

    </body>
</html>