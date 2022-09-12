<?php

$host = "localhost";
$usuario = "root";
$senha = "usbw";
$bd = "tcc";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno){
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
    }
  $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do tcc
    $novo_nome = md5(time()) . $extensao; //define o nome do tcc
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o tcc

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql_code = "INSERT INTO tcc.noticia (idnoticia, titulo, subtitulo, autor, cidade, imagem1, noticia1, noticia2) VALUES (null, null, null, null, null, '$novo_nome', null, null)";

    if($mysqli->query($sql_code))
      $msg = "Arquivo enviado com sucesso!";
    else
      $msg = "Falha ao enviar arquivo.";

  }

?>
<h1>Upload de Arquivos</h1>
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  Arquivo: <input type="file" required name="arquivo">
  <input type="submit" value="Salvar">
</form>
