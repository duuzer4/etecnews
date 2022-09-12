<!DOCTYPE html>
<html>
<title>ETEC News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="shortcut icon" href="etec.png">
<body>

<!-- barra -->
<div class="w3-top">
  <div class="w3-bar w3-red-dark w3-wide w3-padding w3-card w3-opacity-min">
    <img src="etec.png" alt="etec-simbol" style="width:3.4%">
    <a href="#home" class="w3-bar-item w3-button"><b>ETEC</b> News</a>
    <div class="w3-right w3-hide-small">
      <a href="#noticias" class="w3-bar-item w3-button">Notícias</a>
      <a href="#sobre" class="w3-bar-item w3-button">Sobre</a>
      <a href="contato.php" class="w3-bar-item w3-button">Contato</a>
    </div>
  </div>
</div>
<!-- foto da escola -->
<header class="w3-display-container w3-content w3-wide" style="width: 100%;" id="home">
  <img class="w3-image" src="ima.jpg" alt="etec" width="100%" height="100%">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-red-dark w3-opacity-med  "><b>ETEC</b></span> <span class="w3-hide-small w3-text-light-grey">News</span></h1>
  </div>
</header>

<!-- pagina -->
<div>
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
     $sql = "SELECT * FROM noticia" ;

     $resultado = $conexao->query($sql);

     $noticia = $resultado->fetch_array(MYSQLI_ASSOC);
?>
  <!-- noticia -->
  <div class="w3-container w3-padding-32" style="margin-left: 20px;" id="noticias">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Notícias</h3>
    <a href="tdNoticia.php" class="w3-button w3-border w3-border-red w3-round-xlarge"><b>Ver mais</b></a>
  </div>


  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">ETEC no Desimpedidos!</div>
        <img src="desim.jpg" alt="not" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">Time da ETEC é Bi-Campeão!</div>
        <a href="noticiaD.php" class="w3-button"><img src="cacto.jpg" alt="not" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">
          Certificado da Olimpíadas!
        </div>
        <img src="certi1.jpg" alt="not" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">
          Aluno da ETEC ganha bolsa na PUC!
        </div>
        <img src="usp1.jpg" alt="not" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">ETEC recebe escolas!</div>
        <img src="fisi.jpg" alt="not" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">Trote vira Tradição da ETEC!</div>
        <img src="trote.jpg" alt="not" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container" style="width: 100%;">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">Alunos da ETEC viram Jogadores Profissional!</div>
        <img src="contr.jpg" alt="not" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">Time da ETEC é Campeão Estadual!</div>
        <img src="in.jpg" alt="not" style="width:100%">
      </div>
    </div>
  </div>

  <!-- sobre -->
  <div class="w3-container w3-padding-32" id="sobre">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="margin-left: 20px;">Sobre</h3>
    <p>Site dedicado inteiramente os alunos da escola Etec Coronel Raphael Brandão de Barretos, para divulgar os acontecimentos que estes promovem, assim ajudando a despertar nos alunos a consciência crítica diante da realidade educacional e social. Além de incentivar o letramento e a cidadania, a partir da melhoria na leitura, na escrita, bem como estimular a expressão oral e produção textual.
    </p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="caca.jpg" alt="caio" style="width:100%">
      <h3>Caio Moretti</h3>
      <p class="w3-opacity">Programador</p>
      <p>• 17 anos <br>
        • Técnico em Informática Contato <br>
        • Brad Prit <br>
        • Pro Player de PUBG</p>
        <p class="w3-center" style="font-size: 15px;">Contato: caiioeduardo26@gmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="pitoco.jpg" alt="khauan" style="width:100%">
      <h3>Khauan Silva</h3>
      <p class="w3-opacity">Designer</p>
      <p>• 18 anos <br> 
        • Técnico em Informática <br>
        • Jogador profissional de futebol <br>
        • Modelo</p>
      <p class="w3-center" style="font-size: 15px;">Contato: <br> khauanpsilva@gmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="lamped2.jpg" alt="henrique" style="width:100%">
      <h3>Henrique Bordim</h3>
      <p class="w3-opacity">Fotógrafo</p>
      <p>• 17 anos <br>
        • Técnico em Informática <br>
        • Jogador de Vôlei  Amador <br>
        • Atlético</p>
        <p class="w3-center" style="font-size: 15px;">Contato: henriquebordim@gmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="jao.jpg" alt="joao" style="width:100%">
      <h3>João Alberto</h3>
      <p class="w3-opacity">Escritor</p>
      <p>• 17 anos <br>
        • Técnico em Informática Contato <br>
        • Jogador de Vôlei e Basquete <br>
        • Apaixonado por esportes</p>
      <p><button class="w3-button w3-light-grey w3-block">Contato</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
        <img src="fefe.jpg" alt="felipe" style="width:100%">
        <h3>Felipe Franco</h3>
        <p class="w3-opacity">Escritor</p>
        <p>• 17 anos <br>
          • Jogador de Vôlei <br>
          • Técnico em Informática <br>
          • Amante de Esportes</p>
          <p class="w3-center" style="font-size: 15px;">Contato: felipeefrancooo@outlook.com.br</p>
      </div>
  </div>

  <!-- Contact Section -->
  <!-- <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div> --> 
  
<!-- imagem do mapa -->
<div class="w3-container">
  <iframe style="margin-top: 25px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.9118885976413!2d-48.58570298500685!3d-20.55633666339896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bb85195a67e46d%3A0x8c50f076b540b54e!2sEtec%20Cel.%20Raphael%20Brand%C3%A3o%20-%20Extens%C3%A3o%20EE%20Cel.%20Silvestre%20de%20Lima!5e1!3m2!1spt-BR!2sbr!4v1598654466789!5m2!1spt-BR!2sbr" width="1395" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- final da pagina -->
</div>


<!-- creditos -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Caio</a></p>
</footer>

</body>
</html>
