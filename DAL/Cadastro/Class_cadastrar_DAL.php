
<?php
    //arquivo chamado no action do formulario de cadastro
    require_once "Class_cadastro_DAL.php";
    require_once "../Class_conexao_DAL.php";
    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
    //pega os valores do formulario
    $pessoa['nome'] = mysqli_real_escape_string($conexao, $_POST['nome']);
    $pessoa['email'] = mysqli_real_escape_string($conexao, $_POST['email']);
    $pessoa['usernick'] = mysqli_real_escape_string($conexao, $_POST['usernick']);
    $pessoa['data_nascimento'] = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
    $pessoa['sexo'] = mysqli_real_escape_string($conexao, $_POST['sexo']);
    $pessoa['senha'] = mysqli_real_escape_string($conexao, $_POST['senha']);

    //chama função que vai inserir os dados no banco
    $result = Func_cadastrar_DAL($pessoa);//localizada no arquivo Class_cadastro_DAL, linha 3
    
    //teste do retorno
    if($result != "Usuário cadastrado com sucesso!")
    {
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = $result;    
        echo $result;   
        header("Location: ../../cadastro.php");
    }
    elseif($result == "Usuário cadastrado com sucesso!")
    {    
        //tudo deu certo loga
        $_SESSION['auxiliar'] = $result;
        echo $_SESSION['auxiliar'];
        header("Location: ../../login.php");
    }
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    


?>

