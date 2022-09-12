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
    $idcontato = filter_input(INPUT_POST, 'idcontato');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $titulo = filter_input(INPUT_POST, 'titulo');
    $subtitulo = filter_input(INPUT_POST, 'subtitulo');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $noticia1 = filter_input(INPUT_POST, 'noticia1');
    $noticia2 = filter_input(INPUT_POST, 'noticia2');

    $sql = "UPDATE 'tcc'.'contato' SET idcontato='null' nome='$nome' email='$email' titulo='$titulo' subtitulo='$subtitulo' cidade='$cidade' noticia1='$noticia1' noticia2='$noticia2' imagem1='null' imagem2='null' WHERE idcontato='$idcontato'";
    
    $resultado = $conexao->query($sql);

    if($conexao->query($sql))
    {
        echo '
            <a href="PEditor.php">
            <h1 class="w3-button w3-green">Noticia editada com sucesso!</h1>
            </a>
            '; 
    }
    else{
        echo '
        <a href="PEditor.php">
        <h1 class="w3-button w3-red">Erro!</h1>
        </a>
        '; 
    }
?>