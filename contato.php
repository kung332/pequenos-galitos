<!DOCTYPE html>
<html lang="pt.br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilocontato.css">
 <title>CADASTRO NA AGENDA</title>
</head>

<body>
  
  <div class= "geral">
    
     <div class= "p-esquerda">
      <h1>CADASTRE AS INFORMAÇÕES<h2>
      <img src="ursinho.svg" class="ursimagem" alt="ursinho animado "> 
      <button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px; font-family: 'Oswald', sans-serif;"><a id="butao" href= "index.php"> VISUALIZAR AGENDA </a></button> 
     </div>
     <div class= "p-direita">
       <div class= "cardcadastro">
        <h1>CADASTRAR</h1> 
         <form action="" method="post">
        <div class= cardcongruentes>
            <label for="usuario">Nome:</label>
            <input type="texto" name="nome" placeholder="nome" >
        </div>
        <div class= cardcongruentes>
           <label for="usuario">Sobrenome:</label>
           <input type="texto" name="sobrenome" placeholder="sobrenome" >
        </div>
        <div class= cardcongruentes>
           <label for="usuario">Telefone:</label>
           <input type="texto" name="telefone" placeholder="telefone" >
        </div>
        <input type="submit" class="butao" value = GRAVAR>
 <?php



//variaveis da conexão do banco dados
include "conexao.php";

// Verifica se o formulário foi enviado
// Coleta os dados do formulário

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $telefone = $_POST["telefone"];

  // Insere os dados no banco de dados
  $sql = "INSERT INTO db (nome, sobrenome, telefone) VALUES ('$nome', '$sobrenome', '$telefone')";
  if ($conn->query($sql) === TRUE) {
      echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
$conn->close();
?>
     

    




   </div> 
 


    
</body>
</html>