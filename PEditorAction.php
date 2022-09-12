<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Notícia Action</title>

</head>

<body>
<?php 
require_once 'menuP.php';
?>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
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
    $idcontato = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $titulo = filter_input(INPUT_POST, 'titulo');
    $subtitulo = filter_input(INPUT_POST, 'subtitulo');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $noticia1 = filter_input(INPUT_POST, 'noticia1');
    $noticia2 = filter_input(INPUT_POST, 'noticia2');

    if(isset($_POST['btn2'])){ 
    $sql = "SELECT * FROM contato WHERE idcontato = ".$_POST['id'] ;

    $resultado = $conexao->query($sql);

    $contato = $resultado->fetch_array(MYSQLI_ASSOC);
    
    $sql = "UPDATE contato SET nome='$nome', email='$email', titulo='$titulo', subtitulo='$subtitulo', cidade='$cidade', noticia1='$noticia1', noticia2='$noticia2', imagem1='".$contato['imagem1']."', imagem2='".$contato['imagem2']."' WHERE idcontato='$idcontato'";

    if($conexao->query($sql))
    {
        echo '<div style="text-align: center;">';
        echo '<a href="tdEdtior.php"><h1 class="w3-bottom w3-center w3-green">Noticia editada com sucesso!</h1></a>'; 
        echo '</div>';
    }
    else{
        echo '<div style="text-align: center;">';
        echo '<a href="tdEdtior.php"><h1 class="w3-bottom w3-center w3-red">Erro!</h1></a>'; 
        echo '</div>';
    }
}else{
        $sql = "SELECT * FROM contato WHERE idcontato = ".$_POST['id'] ;

        $resultado = $conexao->query($sql);

        $contato = $resultado->fetch_array(MYSQLI_ASSOC);
    $sql = "INSERT INTO noticia (email, titulo, subtitulo, autor, cidade, imagem1, noticia1, noticia2, imagem2) VALUES ('$email', '$titulo', '$subtitulo', '$nome', '$cidade', '".$contato['imagem1']."', '$noticia1', '$noticia2', '".$contato['imagem2']."')";
    if($conexao->query($sql))
    {
        copy("uploadContato/".$contato['imagem1'], "upload/".$contato['imagem1']);
        unlink("uploadContato/".$contato['imagem1']);
        copy("uploadContato/".$contato['imagem2'], "upload/".$contato['imagem2']);
        unlink("uploadContato/".$contato['imagem2']);
        echo '
            <a href="tdEdtior.php">
            <h1 class="w3-bottom w3-center w3-green">Noticia salva com sucesso!</h1>
            </a>
            ';
            $sql = "DELETE FROM contato WHERE idcontato='".$idcontato."';";
        $conexao->query($sql); 
    }
    else{
        echo '
        <a href="tdEdtior.php">
        <h1 class="w3-bottom w3-center w3-red">Erro!</h1>
        </a>
        '; 
    }
}
?>
</div>
<footer class="w3-center w3-black w3-padding-16" style="margin-top: 860px;">
  <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Caio</a></p>
</footer>
</body>
</html>