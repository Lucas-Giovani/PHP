<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP - Tabuada</title>
    <style>
        .verde
        {
            background-color:green;
        }
        .amarelo
        {
            background-color:yellow;
        }
    </style>
</head>
<body>
    <?php
    //echo(" PARA ABRIR COLOQUE ESSE LINK NO GOOGLE: LOCALHOST/PHP-1/tabuada.php");

        $valor = $_POST["valor"];
        

    for($x=1;$x<=10;$x++)
        {
            $resultado = ($valor * $x);
            if($resultado%2 == 0)
            {
            echo("<div class='verde'>");
            }
            else
            {
            echo("<div class='amarelo'>");
            }
            echo("$valor * $x= $resultado <br>");
            echo("</div>");
        }


    ?>

</body>
</html>