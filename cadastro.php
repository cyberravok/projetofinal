
<?php

if (isset($_POST['submit]'])){

  require('config.php');

$nome = $_POST['nome'];
$email= $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$pais= $_POST['pais'];
$codigo_area = $_POST['codigo de área'];
$cep = $_POST['cep'];
$senha = md5($senha = $_POST['senha']);
$status = $_POST['status'];

// Executa a conexao com o mysql e selecionar a base
  


//montar a query sql de gravação recebendo as variaveis via post
$result = mysqli_query($conexao, "INSERT INTO locadora(nome,email,senha,telefone,estado,cep,pais,codigo_area,senha) VALUES ('$nome','$email','$senha','$telefone','$estado','$cep','$pais','$codigo_area','$senha')");
}
?>


<form action ="cadastro.php" method = "post">


  <label for="name">Nome:</label>
  <input type="text" id="name" name="name"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>

  
  <label for="password">Senha:</label>
  <input type="password" id="password" name="password"><br>

  <label for="telefone">telefone:</label>
  <input type="" id="number" name="p"><br>

  <label for="estado">estado:</label>
  <input type="estado" id="estado" name="estado"><br>

  <label for="pais">Páis:</label>
  <input type="pais" id="pais" name="pais"><br>

  <label for="codigo de area">Código de Área:</label>
  <input type="codigo_area" id="codigo_area" name="codigo_area"><br>

  <label for="cep">CEP:</label>
  <input type="cep" id="cep" name="cep"><br>

  <input type="submit" value="Cadastrar">
</form>