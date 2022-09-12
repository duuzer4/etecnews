<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="noticia.css">
    <link rel="shortcut icon" href="etec.png">
    <title>Notícia</title>
</head>
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
     $sql = "SELECT * FROM noticia WHERE idnoticia = ".$_GET['id'] ;

     $resultado = $conexao->query($sql);

     $noticia = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<body>
    <!-- Barra(sit on top) -->
<div>
    <?php
    require_once 'menuP.php';
    ?>
    <div>
        <div>
            <h1 style="font-weight: bold; text-align: center; margin-top: 100px;">
                <?php
                 echo $noticia["titulo"]; 
                ?>
            </h1>
        </div>
        <div class="" style="text-align: center; margin-left: 180px; margin-right: 180px;">
            <h2 style="color: gray;">
                <?php 
                echo $noticia["subtitulo"];
                ?>
            </h2>
        </div>
        <div style="font-weight: bold; text-align: center; margin-top: 40px; margin-right: 700px; letter-spacing: -.0725rem;">
            <p> Escrito por
                <?php
                echo $noticia["autor"]
                ?>

            </p>
        </div>
        <div class="w3-center" style="margin-top: 30px;">
            <?php 
                foreach($resultado as $teste)
                {
                    echo '<img src="upload/'.$teste['imagem1'].'" style="width: 50%">';
                }
            ?>
        </div>
        <div class="" style="text-align: justify; margin-left: 350px; margin-right: 350px; margin-top: 40px;">
            <h4>
                <?php 
                echo $noticia["noticia1"]
                ?>

            </h4>
        </div>
        <div class="w3-center" style="margin-top: 30px;">
            <?php 
                foreach($resultado as $teste)
                {
                    echo '<img src="upload/'.$teste['imagem2'].'" style="width: 50%">';
                }
            ?>
        </div>
        <div class="" style="text-align: justify; margin-left: 350px; margin-right: 350px; margin-top: 40px;">
            <h4>
                <?php 
                echo $noticia["noticia2"]
                ?>
            </h4>
        </div>
    </div>
    <!-- imagem do mapa -->
    <!--<div class="w3-container">
        <iframe style="margin-top: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.9118885976413!2d-48.58570298500685!3d-20.55633666339896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bb85195a67e46d%3A0x8c50f076b540b54e!2sEtec%20Cel.%20Raphael%20Brand%C3%A3o%20-%20Extens%C3%A3o%20EE%20Cel.%20Silvestre%20de%20Lima!5e1!3m2!1spt-BR!2sbr!4v1598654466789!5m2!1spt-BR!2sbr" width="1395" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>-->
    <!-- creditos -->
    <footer class="w3-center w3-black w3-padding-16" style="margin-top: 420px;">
        <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Caio</a></p>
    </footer>
</div>
<?php 
    $conexao->close();
?>
</body>
</html>