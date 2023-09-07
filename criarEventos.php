<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar eventos</title>
</head>
<body>
 
  <?<php
  
  $conexao = mysqli_connect("localhost", "root", "", "formulario-local");
  
  if(!$conexao) {
    echo"Não conectado";
  }
  echo"Conectado ao banco>>>>>>>";
  
  $rua = $_POST['rua'];
  $rua = mysqli_real_escape_string($conexao, $rua);

  $sql = "SELECT rua FROM formulariolocal.local WHERE rua='$rua'";
  $retorno = mysqli_query($conexao, $sql);

  if(mysqli_num_rows($retorno)>0) {
  echo"RUA JA CADASTRADA!<br>";
  } else {
  $rua = $_POST['rua'];
  $cep = $_POST['cep'];
  $numero = $_POST['numero'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];

$sql = "INSERT INTO formulariolocal.local(rua, cep, numero, bairro, cidade, estado) values('$rua', '$cep', '$numero', '$bairro', '$cidade', '$estado')";

$resultado = mysqli_query($conexao, $sql);
echo"EVENTO CADASTRADO COM SUCESSO!<br>";

  }


  ?>


</body>
</html>