<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>pneumoultramicroscopicossilicovulcanoconiotico</title>
    <link rel="stylesheet" href="estiloinicial.css">
</head>
<body>


<div class= "geral">

    <div class= "banner">
    
      <h1 >pneumoultramicroscopicossilicovulcanoconiótico</h1>
    </div>

    <div classs= "sub-banner">
      <h1>
       Com 46 letras, pneumoultramicroscopicossilicovulcanoconiótico descreve indivíduo que possui doença pulmonar causada pela inspiração de cinzas vulcânicas.
      </h1>
    </div>

    <div class= "comunhao">
        <div class="cesquerdo">
            <P>AGENDA</P>
            <img src="carinhalista.svg" class="listaimg"  alt="carinha lista">
            <button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px; font-family: 'Oswald', sans-serif;"><a id="butao" href= "login.php"> VISUALIZAR AGENDA </a></button> 

        </div>

      <div class="cdireito">

       

       <?php
       //wagner willian santos, otávio marques domingos, gabriel herique sena silva e nicolas assunção
       //echo 'maior palavra do dicionario'. '<br>'; ?> 

       <?php 

       include "conexao.php";

       // lembrar de baixar o código atualizado para fazer o uplowad no site

       $sql= "SELECT nome,sobrenome, telefone FROM db";

       $result= $conn -> query ($sql);

       if ($result->num_rows > 0) {
       while ($linha = $result->fetch_assoc()) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
       }
       } else {
       echo "Nenhum registro encontrado.";
       }

       $conn->close();
       ?>
      </div><br>
       

    </div>

</div>   

</body>
</html>