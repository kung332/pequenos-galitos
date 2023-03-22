<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pneumoultramicroscopicossilicovulcanoconiotico</title>
</head>
<body>
    <h1>pneumoultramicroscopicossilicovulcanoconiótico</h1>
    <p>
    Com 46 letras, pneumoultramicroscopicossilicovulcanoconiótico descreve indivíduo que possui doença pulmonar causada pela inspiração de cinzas vulcânicas. </p>
    
    <?php
    //wagner willian santos, otávio marques domingos e gabriel herique sena silva
    echo 'maior palavra do dicionario'. '<br>'; ?> 

   <?php

$servername= 'localhost'; 
$username= 'id20481078_pequeno_db'; 
$password= 'Wag1234566543§'; 
$nomedodb= 'id20481078_pequeno';
 

$conn= new mysqli ( $servername , $username , $password,$nomedodb ); 

If ($conn->connect_error){	  

Die ('Conecção Falhou'. $conn->connect_error);} 

Echo  'conectado ao DB!'. '<br>';

 // lembrar de baixar o código atualizado para fazer o uplowad no site

$squl= 'SELECT nome,sobrenome, telefone FROM alunos';

$result= $conn -> querry ($sql);

if ($result -> num_rows>0){ 
while($row= $result -> fetch_assoc() ){

echo 'nome:'. $row [nome]. $row [sobrenome]. 'telefone:'. $row [telefone].'<br>';}
} else { echo ' tabela vazia ';}

$conn -> close

?> 

</body>
</html>
