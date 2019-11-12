<?php
    //aquivo chamado no action do formulario de login
    include_once '../../nav_home.php';
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

    //Definindo questão e reposta
    $Questao = mysqli_real_escape_string($conexao, $_POST['Alt']);
    $Resposta = mysqli_real_escape_string($conexao, $_POST['resposta']);
    $Usuario = mysqli_real_escape_string($conexao, $_SESSION['codU']);
    $n = $_SESSION["questaoesc"];

    //cria a querry
    $sql = "INSERT INTO TB_resposta (resposta, usuario, pergunta) VALUES ('$Resposta','$Usuario','$Questao')";
            
    //chama função que vai conectar ao banco e executar a query
    $resultado = Func_executeselect_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27

    //teste do retorno
    if(empty($resultado))
    {//2
        //erro na execução, campo vazio ou dados invalidos
        $_SESSION['auxiliar'] = "Busca com erro";       
        //header("Location: ../../exercicios.php");
    }//2
    else
    { //3  
        //tudo deu certo 
        
        header("Location: ../../questao.php?n=".$n);
    }//3
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56