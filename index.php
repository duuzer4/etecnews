<!DOCTYPE html>
<html>
<title>ETEC News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="shortcut icon" href="etec.png">
<body>

<!-- barra -->
<?php 
  require_once 'menuP.php';
?>
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
     
?>
  <!-- noticia -->
  <div class="w3-container w3-padding-32" style="margin-left: 20px;" id="noticias">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Notícias</h3>
    <a href="tdNoticia.php" class="w3-button w3-border w3-border-red w3-round-xlarge"><b>Ver mais</b></a>
  </div>


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
    $cont = 0;
    foreach($resultado as $teste){
        if($cont == 0)
        echo '<div class="w3-row-padding">';
        echo '<div class="w3-col l3 m6 w3-margin-bottom" id="'.$teste['idnoticia'].'">';
        echo '<div class="w3-display-container">';
        echo '<a href="noticiaD.php?id='.$teste['idnoticia'].'" class=""><div class="w3-display-topleft w3-green-gray w3-padding-small w3-opacity-med">'.$teste['titulo'].'</a></div>';
        echo '<a href="noticiaD.php?id='.$teste['idnoticia'].'" class="w3-button"><img src="upload/'.$teste['imagem1'].'" style="width:100%"></a>';
        echo '</div>';
        echo '</div>';
        $cont++;
        if ($cont == 4) {
            $cont = 0;
            echo '</div>';
        }
    }

  ?>

  <!-- sobre -->
  <div class="w3-container w3-padding-32" id="sobre">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="margin-left: 20px;">Sobre</h3>
    <p>Site dedicado inteiramente os alunos da escola Etec Coronel Raphael Brandão de Barretos, para divulgar os acontecimentos que estes promovem, assim ajudando a despertar nos alunos a consciência crítica diante da realidade educacional e social. Além de incentivar o letramento e a cidadania, a partir da melhoria na leitura, na escrita, bem como estimular a expressão oral e produção textual.
    </p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="caca.jpg" alt="caio" style="width: 100%">
      <h3>Caio Moretti</h3>
      <p class="w3-opacity">Programador</p>
      <p>• 17 anos <br>
        • Técnico em Informática <br>
        </p>
        <p class="w3-center" style="font-size: 15px;">Contato: caiioeduardo26@gmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="pitoco.jpg" alt="khauan" style="width:100%">
      <h3>Khauan Silva</h3>
      <p class="w3-opacity">Designer</p>
      <p>• 18 anos <br> 
        • Técnico em Informática <br>
        </p>
      <p class="w3-center" style="font-size: 15px;">Contato: <br> khauanpsilva@gmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="lamped2.jpg" alt="henrique" style="width:100%">
      <h3>Henrique Bordim</h3>
      <p class="w3-opacity">Fotógrafo</p>
      <p>• 17 anos <br>
        • Técnico em Informática <br>
        </p>
        <p class="w3-center" style="font-size: 15px;">Contato: henriquebordim@gmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
      <img src="jao.jpg" alt="joao" style="width:100%">
      <h3>João Alberto</h3>
      <p class="w3-opacity">Escritor</p>
      <p>• 17 anos <br>
        • Técnico em Informática <br>
        </p>
        <p class="w3-center" style="font-size: 15px;">Contato: joaoalbertbarbosanas@hotmail.com</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="width: 20%;">
        <img src="fefe.jpg" alt="felipe" style="width:100%">
        <h3>Felipe Franco</h3>
        <p class="w3-opacity">Escritor</p>
        <p>• 17 anos <br>
          • Técnico em Informática <br>
          </p>
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
