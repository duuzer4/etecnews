<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contato.css">
    <link rel="shortcut icon" href="etec.png">
    <title>Contato</title>
</head>

<body>
    <div>
        <?php 
            require_once 'menuP.php';
        ?>
        <div class="interior" style="margin-top: 90px;">
        <form action="contatoAction.php" method="POST" enctype="multipart/form-data">
            <h1 style="font-weight: bold;">Mande sua notícia para a gente</h1>
            <input type="text" name="nome" class="name" placeholder="Nome">
            <input type="email" name="email" class="email" placeholder="Email">
            <input type="text" name="titulo" class="name" placeholder="Titulo">
            <input type="text" name="subtitulo" class="email" placeholder="Subtitulo">
            <input type="text" name="cidade" class="name" placeholder="Cidade">
            <textarea rows="1" name="noticia1" placeholder="Notícia" class="message"></textarea>
            <textarea rows="1" name="noticia2" placeholder="Notícia 2 (não é obrigatorio)" class="message"></textarea>
            <input type="file" name="arquivo[]" multiple="multiple" />
            <button class="btn1">Enviar</button>
        </form>
        </div>
        <!-- imagem do mapa -->
        <!--<div class="w3-container">
            <iframe style="margin-top: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.9118885976413!2d-48.58570298500685!3d-20.55633666339896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bb85195a67e46d%3A0x8c50f076b540b54e!2sEtec%20Cel.%20Raphael%20Brand%C3%A3o%20-%20Extens%C3%A3o%20EE%20Cel.%20Silvestre%20de%20Lima!5e1!3m2!1spt-BR!2sbr!4v1598654466789!5m2!1spt-BR!2sbr" width="1395" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>-->
        <!-- creditos -->
        <footer class="w3-center w3-black w3-padding-16" style="margin-top: 95px;">
            <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Caio</a></p>
        </footer>
    </div>
</body>

</html>
