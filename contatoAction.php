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
    $msg = false;

     $nome = filter_input(INPUT_POST, 'nome');
     $email = filter_input(INPUT_POST, 'email');
     $titulo = filter_input(INPUT_POST, 'titulo');
     $subtitulo = filter_input(INPUT_POST, 'subtitulo');
     $cidade = filter_input(INPUT_POST, 'cidade');
     $noticia1 = filter_input(INPUT_POST, 'noticia1');
     $noticia2 = filter_input(INPUT_POST, 'noticia2');
     
        //diretório para salvar as imagens
        $diretorio = "uploadContato/";
        //Verificar a existência do diretório para salvar as imagens e informa se o caminho é um diretório
    if(!is_dir($diretorio)){ 
        echo "Pasta $diretorio nao existe";
    }else{    
        $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
        //loop para ler as imagens
        for ($controle = 0; $controle < count($arquivo['name']); $controle++){        
            $destino = $diretorio."/".$arquivo['name'][$controle];
            $imagem[$controle] = $arquivo['name'][$controle];
        //realizar o upload da imagem em php
        //move_uploaded_file — Move um arquivo enviado para uma nova localização
            if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
                echo "Upload realizado com sucesso<br>"; 
            }else{
                echo "Erro ao realizar upload";
            }        
        }
    }   

        /*$extensao = strtolower(substr($_FILES['arquivo1']['name'], -4)); //pega a extensao do tcc
        $novo_imagem = md5(time()) . $extensao; //define o nome do tcc
        $diretorio = "uploadContato/"; //define o diretorio para onde enviaremos o tcc
    
        move_uploaded_file($_FILES['arquivo1']['tmp_name'], $diretorio.$novo_imagem); //efetua o upload

        $extensao2 = strtolower(substr($_FILES['arquivo2']['name'], -4)); //pega a extensao2 do tcc
        $novo_imagem2 = md5(time()) . $extensao2; //define o nome do tcc
        $diretorio = "uploadContato/"; //define o diretorio2 para onde enviaremos o tcc
    
        move_uploaded_file($_FILES['arquivo2']['tmp_name'], $diretorio.$novo_imagem2); //efetua o upload
        */
        $sql_code = "INSERT INTO contato (nome, email, titulo, subtitulo, cidade, noticia1, noticia2, imagem1, imagem2) VALUES ('$nome', '$email', '$titulo', '$subtitulo', '$cidade', '$noticia1', '$noticia2', '$imagem[0]', '$imagem[1]')";
        
        if($conexao->query($sql_code))
        {
            echo '<div style="text-align: center;">';
            echo '<a href="contato.php"><h1 class="w3-bottom w3-center w3-green">A sua notícia foi enviada com sucesso!</h1></a>'; 
            echo '</div>';
        }
        else{
            echo '<div style="text-align: center;">';
            echo '<a href="contato.php"><h1 class="w3-bottom w3-center w3-red">Ocorreu algum erro!</h1></a>'; 
            echo '</div>';
        }
    
?>
</div>
<footer class="w3-center w3-black w3-padding-16" style="margin-top: 860px;">
  <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Caio</a></p>
</footer>
</body>
</html>