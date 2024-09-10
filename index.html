<?php
    include('php/conexao.php');

    if(isset($_POST['cpf']) || isset($_POST['senha'])){

        if(strlen($_POST['cpf']) == 0){
            echo "Preencha seu CPF!";
        } else if(strlen($_POST['senha']) == 0){
            echo "Preencha seu senha!";
        } else {

            $cpf = $mysqli -> real_escape_string($_POST['cpf']);
            $senha = $mysqli -> real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
            $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query-> num_rows;

            if($quantidade == 1){

                $usuario = $sql_query -> fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['spdata'] = $usuario['spdata'];
                $_SESSION['nomesetor'] = $usuario['nomesetor'];
                $_SESSION['chapa'] = $usuario['chapa'];
                $_SESSION['locals'] = $usuario['locals'];
                


                header("Location: maqueiros.php");

            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }

        }


    }

?>


<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="shortcut icon" href="img/hvm.png" type="image/x-icon"/>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
            background-color: dodgerblue;
        }

        button {
            background-color: #094f6e;
        }

    </style>

</head>
<body>
    
    <div class="tela-login">
        <br>
        <h1 align="center">Solicitar Maqueiro - HVM</h1>
        <p align="center"> <img align="center" src="img/hvm.png" width="35%" height="auto"></p> 
        <form action="" method="POST" style=" text-align: center;" autocomplete="off">
            <p>
                <label for="CPF"><h3>CPF</h3></label>
                <input class="tela-login" type="text" placeholder="CPF" name="cpf">
            </p>
            <p>
                <label for="CPF"><h3>Senha</h3></label>
                <input class="tela-login" type="password" placeholder="Senha" name="senha">
            </p>
            <p>
                <br>
                <button class="tela-login" type="submit">Entrar</button>
            </p>
        </form>
        <br><p><b>OBS: Use a mesma senha do sistema de refeições do SND</b></p>
        
        <br>
    </div>


</body>
</html>