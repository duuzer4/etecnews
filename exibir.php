<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";

    $username = "root";

    $password = "usbw";

    $dbname = "tcc";

    $conexao = new mysqli($servername, $username, $password, $dbname);

    $conexao->set_charset("utf8");
    
    if ($conexao->connect_error) {

        die("Connection failed: " . $conexao->connect_error);

    } 
    $sql = "SELECT * FROM tcc.noticia ORDER BY idnoticia DESC;" ;

    $resultado = $conexao->query($sql);

    foreach($resultado as $teste)
    {
        echo '<img src="upload/'.$teste['imagem1'].'">';
      }
?>
</body>
</html>