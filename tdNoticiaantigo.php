<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tdNoticia.css">
  <link rel="shortcut icon" href="etec.png">
  <title>Notícias</title>
</head>

<body>
  <!-- barra do topo-->
  <div class="w3-top">
    <div class="w3-bar w3-red-dark w3-wide w3-padding w3-card w3-opacity-min">
      <img src="etec.png" alt="etec-simbol" style="width:3.4%">
      <a href="index.php" class="w3-bar-item w3-button"><b>ETEC</b> News</a>
      <div class="w3-right w3-hide-small">
        <a href="index.php#sobre" class="w3-bar-item w3-button">Sobre</a>
        <a href="contato.php" class="w3-bar-item w3-button">Contato</a>
      </div>
    </div>
  </div>
  <!-- esqueleto das noticias-->
  <div>
    <div class="w3-container w3-padding-32" id="noticias">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="margin-top: 50px;">Todas as notícias</h3>
    </div>
    
    <div class="w3-row">
    <div class="w3-col" style="width: 80%;">
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
    $sql = "SELECT * FROM noticia ORDER BY idnoticia DESC LIMIT 8;" ;

    $resultado = $conexao->query($sql);

    //$noticia = $resultado->fetch_array(MYSQLI_ASSOC);
    $contador = 0;

    foreach($resultado as $teste)
    {
        if($contador == 0){
          echo '<div class="w3-row-padding">';
        }
        echo '<div class="w3-col l3 m6 w3-margin-bottom" id="'.$teste['idnoticia'].'">';
        echo '    <div class="w3-display-container">';
        echo '        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">'.$teste['titulo'].'</div>';
        echo '        <a href="noticiaD.php?id='.$teste['idnoticia'].'" class="w3-button"><img src="cacto.jpg" alt="not" style="width:100%"></a>';
        echo '    </div>';
        echo '</div>';
        $contador++;
        if($contador == 4){
          $contador = 0;
          echo '</div>';
        }
    }​​

  ?>
      echo '<div class="w3-row" style="margin-left: 40px;"> ';
        echo '<div class="w3-col l3 m6 w3-margin-bottom"> ';
          echo '<div class="w3-display-container">';
          echo '<a href="noticiaD.php" class="w3-button"><img src="desim.jpg" alt="not" style="width:100%"></a>';
          echo '</div>';
        echo '</div>';
        echo '<div class="w3-half w3-padding-64" style="padding-left: 64px">';
        echo '<a href="file:///D:/TCC/noticia3-09.html">';
          echo '<div class="w3-display-container">';
          echo '<h1 class="w3-xlarge" style="font-weight: bold;">';
          echo 'ETEC no Desimpedidos!';
          echo '</h1>';
          echo '</div>';
          echo '</a>';
          echo '<div class="w3-display-container">';
          echo '<h2 style="color: gray; font-size: medium; font-weight: bold;">';
          echo 'Vídeo da Interclasse da Etec viraliza e vai parar no Instagram dos Desimpedidos.';
          echo '</h2>';
          echo '</div>';
          echo '<div class="w3-display-container">';
          echo '<p style="font-weight: bold; font-size: small;">';
          echo 'Escrito por Henrique Bordim da Silva.';
          echo '</p>';
        echo '</div>';
        echo '</div>';
      echo '</div>';
      echo '<hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">';

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="cacto.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              Time de Vôlei é Bicampeão
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              Time da escola ETEC Coronel Raphael Brandão é campeão pela segunda vez consecutiva.
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por João Alberto.
            </p>
        </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="certi1.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              Certificado das Olimpíadas!
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              Alunos da Etec ganham a olimpíada de português e ganham certificado.
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por Henrique Bordim da Silva.
            </p>
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="usp1.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              Aluno da ETEC ganha bolsa na PUC!
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              O aluno Khauan Silva, cursante de informática na etec de Barretos, ganha bolsa na Pontifícia Universidade Católica de São Paulo
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por Khauan Silva 
            </p>
        </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="fisi.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              ETEC recebe escolas!
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              Etec Raphael Brandão Recebe 9° anos de Escolas Publicas Estaduais.
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por Henrique Bordim da Silva.
            </p>
        </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="trote.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              Trote vira Tradição da ETEC!
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              Trote de final de ano, na Etec Coronel Raphael Brandão vira tradição anual, na escola.
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por João Alberto Barbosa.
            </p>
        </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="contr.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              Alunos da ETEC viram Jogadores Profissional!
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              Khauan Silva e Caio Cintra aceitam oferta do Corinthians e são o novo reforço do timão!
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por Khauan SIlva.
            </p>
        </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

      <div class="w3-row" style="margin-left: 40px;">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <a href="noticiaD.php" class="w3-button"><img src="in.jpg" alt="not" style="width:100%"></a>
          </div>
        </div>
        <div class="w3-half w3-padding-64" style="padding-left: 64px">
          <a href="file:///D:/TCC/noticia3-09.html">
          <div class="w3-display-container">
            <h1 class="w3-xlarge" style="font-weight: bold;">
              Time da ETEC é Campeão Estadual!
            </h1>
          </div>
          </a>
          <div class="w3-display-container">
            <h2 style="color: gray; font-size: medium; font-weight: bold;">
              Time da escola ETEC Coronel Raphael Brandão é campeão pela primeira vez do  campeonato estadual de futebol.
            </h2>
          </div>
          <div class="w3-display-container">
            <p style="font-weight: bold; font-size: small;"> 
              Escrito por Khauan SIlva.
            </p>
        </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 80%; margin-left: 10%;">

    </div>
    <div class="w3-col" style="width: 15%;">
      <div class="w3-display-container">
        <a href="noticiaD.php" class="w3-button"><img src="desim.jpg" alt="not" style="width:100%"></a>
      </div>
    </div>
  </div>
  </div>

  <!-- imagem do mapa -->
  <!--<div class="w3-container">
        <iframe style="margin-top: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.9118885976413!2d-48.58570298500685!3d-20.55633666339896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bb85195a67e46d%3A0x8c50f076b540b54e!2sEtec%20Cel.%20Raphael%20Brand%C3%A3o%20-%20Extens%C3%A3o%20EE%20Cel.%20Silvestre%20de%20Lima!5e1!3m2!1spt-BR!2sbr!4v1598654466789!5m2!1spt-BR!2sbr" width="1395" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>-->
  <!-- creditos -->
  <footer class="w3-center w3-black w3-padding-16" style="margin-top: 20px;">
    <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
        class="w3-hover-text-green">Caio</a></p>
  </footer>
  </div>

</body>

</html>