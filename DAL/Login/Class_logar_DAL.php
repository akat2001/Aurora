<?php
    session_start();
    require_once "Class_login_DAL.php";
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();

    $pessoa['email'] = mysqli_real_escape_string($conexao, $_POST['email']);
    $pessoa['senha'] = mysqli_real_escape_string($conexao, $_POST['senha']);

    $result = Func_logar_DAL($pessoa);
    
    if($result['auxiliar'] == "erro")
    {
       
        $_SESSION['auxiliar'] ="Usúario ou senha inválidos!";       
        header("Location: ../../login.php");
    }
    elseif($result['auxiliar'] == "logar")
    {    
        $_SESSION['nick'] = $result['usernick'];
        echo $_SESSION['nick'];
        header("Location: ../../home.php");
    }

    

?>