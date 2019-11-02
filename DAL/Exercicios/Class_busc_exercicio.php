<?php
    //aquivo chamado no action do formulario de login
    include_once '../../nav_home.php';
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
    //pega os valores do formulario
    $ContQ = mysqli_real_escape_string($conexao, $_POST['conteudo']);
    $RespQ = mysqli_real_escape_string($conexao, $_POST['respq']);
    
    if($RespQ == "s")
    {
    //chama função que vai buscar os dados no banco
    $sql = "SELECT * FROM tb_questoes AS TBQ, tb_respostas AS TBR, tb_temas AS TBC WHERE TBC.tema = '$ContQ' && TBR.resposta = '$RespQ'";
    }
    else
    {
      //chama função que vai buscar os dados no banco
      $sql = "SELECT TBQ.cod_pergunta, TBQ.enunciado, TBQ.dificuldade, TBQ.resolucao, TBQ.alt_a, TBQ.alt_b, TBQ.alt_c, TBQ.alt_d, TBQ.alt_e FROM tb_questoes AS TBQ, tb_temas AS TBC WHERE TBC.cod_tema = '$ContQ'";  
    }
    $result = mysqli_query($conexao, $sql);
    
    $n = 0;

    while($resultado = mysqli_fetch_assoc($result))
    {
        $_SESSION['pags']=array();
        $_SESSION['pags'][$n]=array();
        $_SESSION['pags'][$n]['CodQ'] = $resultado['cod_pergunta'];
        $_SESSION['pags'][$n]['Enunciado'] = $resultado['enunciado'];
        $_SESSION['pags'][$n]['Dificuldade'] = $resultado['dificuldade'];
        $_SESSION['pags'][$n]['Resol'] = $resultado['resolucao'];
        $_SESSION['RespQ'] = $RespQ;
        $_SESSION['pags'][$n]['A'] = $resultado['alt_a'];
        $_SESSION['pags'][$n]['B'] = $resultado['alt_b'];
        $_SESSION['pags'][$n]['C'] = $resultado['alt_c'];
        $_SESSION['pags'][$n]['D'] = $resultado['alt_d'];
        $_SESSION['pags'][$n]['E'] = $resultado['alt_e'];
        $n++;
    }

    //teste do retorno
    if(empty($_SESSION['pags']))
    {//2
        //erro na execução, campo vazio ou dados invalidos
        unset($_SESSION['busca']);       
        echo $_SESSION['auxiliar'] = "Busca com erro";       
        //header("Location: ../../exercicios.php");
    }//2
    else
    { //3  
        //tudo deu certo 
        $_SESSION['busca'] = "Sucesso";
        $_SESSION['n'] = $n;
        header("Location: ../../exercicios.php");
    }//3
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56