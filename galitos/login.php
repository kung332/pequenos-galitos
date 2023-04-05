<?php
// Inicializa a sessão
session_start();

include "conexao.php";



// Verifica se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome de usuário e senha do formulário
    $username = mysqli_real_escape_string($conn, $_POST["usuario"]);
    $password = mysqli_real_escape_string($conn, $_POST["senha"]);

    // Consulta o banco de dados para verificar se o usuário e senha correspondem a um registro
    $sql = "SELECT id FROM login WHERE nome = '$username' AND senha = '$password'";
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($result) == 1) {
        // Inicia a sessão com o ID do usuário
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row["id"];

        // Redireciona para a página de cadastro
        header("Location: contato.php");
        exit();
    } else {
        // Exibe uma mensagem de erro caso o usuário e senha não correspondam a um registro
        $login_error = "Nome de usuário ou senha inválidos.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página Login</title>
</head>
<body>
    <div class="main-login">
         <div class="left-login">
         <h1>Faça Login<br>Para entrar em nosso site</h1>
         <img src="senha.svg" class="left-login-image"alt="senha">
         </div>
         <div class="rigth-login">
                <div class="card-login" > 
                    <h1>LOGIN</h1>
                   <div class="textfield"> 

                   <form action="" method="post">
                     <label for="usuario"> Usuário </label>
                     <input type="text" name="usuario" placeholder="Usuário">
                    </div>

                    <div class="textfield"> 
                        <label for="senha"> Senha </label>
                        <input type="password" name="senha" placeholder="Senha"><br>
                        </div>
                     <input type= "submit" class="btn-login">Login</button>
                    </form>
                    </div>
                </div>          
            </div>     
    </div> 

    

    



    
</body>
</html>