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
    $sql = "SELECT * FROM contato WHERE idcontato = '1'" ;

    $resultado = $conexao->query($sql);

    $contato = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<title>Pagina do Editor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="contato.css">
<link rel="shortcut icon" href="etec.png">
<?php 
    $idcontato = filter_input(INPUT_GET, 'idcontato');
    $nome = filter_input(INPUT_GET, 'nome');
    $email = filter_input(INPUT_GET, 'email');
    $titulo = filter_input(INPUT_GET, 'titulo');
    $subtitulo = filter_input(INPUT_GET, 'subtitulo');
    $cidade = filter_input(INPUT_GET, 'cidade');
    $noticia1 = filter_input(INPUT_GET, 'noticia1');
    $noticia2 = filter_input(INPUT_GET, 'noticia2');
?>
<body>
    <?php
    require_once 'menuP.php';

    $servername = "localhost";

     $username = "root";

     $password = "usbw";

     $dbname = "tcc";

     $conexao = new mysqli($servername, $username, $password, $dbname);

     $conexao->set_charset("utf8");
     
     if ($conexao->connect_error) {

         die("Connection failed: " . $conexao->connect_error);

     } 
     $sql = "SELECT * FROM contato WHERE idcontato = ".$_GET['id'] ;

     $resultado = $conexao->query($sql);

     $contato = $resultado->fetch_array(MYSQLI_ASSOC);
    ?>
    <div class="interior" style="margin-top: 90px;">
        <form action="PEditorAction.php" method="POST" enctype="multipart/form-data">
            <h1 style="font-weight: bold;">Notícias Recebidas</h1>
            <input type="hidden" name="id" value="<?php echo $contato['idcontato']; ?>">
            <input type="text" name="nome" class="name" value="<?php echo $contato['nome']; ?>">
            <input type="email" name="email" class="email" value="<?php echo $contato['email']; ?>">
            <input type="text" name="titulo" class="name" value="<?php echo $contato['titulo']; ?>">
            <input type="text" name="subtitulo" class="email" value="<?php echo $contato['subtitulo']; ?>">
            <input type="text" name="cidade" class="name" value="<?php echo $contato['cidade']; ?>">
            <textarea rows="1" name="noticia1" class="message"><?php echo $contato['noticia1']; ?></textarea>
            <textarea rows="1" name="noticia2" class="message"><?php echo $contato['noticia2']; ?></textarea>
            <button name="btn1">Enviar PP</button> <button name="btn2">Alterar</button>
        </form> <br>
        <?php
        echo '<div class="">';
        echo '<img src="uploadContato/'.$contato['imagem1'].'" style="width:100%"></a>';
        echo '</div>';
        echo '<br>';
        echo '<div class="">';
        echo '<img src="uploadContato/'.$contato['imagem2'].'" style="width:100%"></a>';
        echo '</div>';
        ?>
        </div>
    <footer class="w3-center w3-black w3-padding-16" style="margin-top: 100px;">
    <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Caio</a></p>
    </footer>
</body>
</html>