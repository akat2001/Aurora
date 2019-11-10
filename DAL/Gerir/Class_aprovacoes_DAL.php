<?php	      
    include '../Class_conexao_DAL.php'; 
    $id = $_GET['id'];      
    $acao = $_GET['acao'];
    $tipo = $_GET['tipo'];

    if($tipo == 'conteudo' && $acao == 'aprovar')
    {//aprovar conteudo

        $sql = "UPDATE tb_conteudo SET estado ='Aprovado' WHERE cod_conteudo = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
        }
        else 
        {
            echo "deu bosta";
        }

    }
    if($tipo == 'conteudo' && $acao == 'recusar')
    {//recusar coteudo
        $sql = "UPDATE tb_conteudo SET estado ='Recusado' WHERE cod_conteudo = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
        }
        else 
        {
            echo "deu bosta";
        }
    }
    if($tipo == 'questao' && $acao == 'aprovar')
    {//aprovar questao
        $sql = "UPDATE tb_questoes SET estado ='Aprovado' WHERE cod_pergunta = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
        }
        else 
        {
            echo "deu bosta";
        }
    }
    if($tipo == 'questa' && $acao == 'recusar')
    {//recusar questao
        $sql = "UPDATE tb_questoes SET estado ='Recusado' WHERE cod_pergunta = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
        }
        else 
        {
            echo "deu bosta";
        }
    }
    if($tipo == 'usuario' && $acao == 'aprovar')
    {//aprovar questao
        $sql = "UPDATE tb_pessoa SET tipo ='Tutor' WHERE cod_pessoa = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
        }
        else 
        {
            echo "deu bosta";
        }
    }
    if($tipo == 'usuario' && $acao == 'recusar')
    {//recusar questao
        $sql = "UPDATE tb_pessoa SET tipo = 'Aluno' WHERE cod_pessoa = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
        }
        else 
        {
            echo "deu bosta";
        }
    }
    if($tipo == 'usuario' && $acao == 'tutoria')
    {//recusar questao
        $sql = "UPDATE tb_pessoa SET tipo = 'Solicitado' WHERE cod_pessoa = '$id' ";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            echo "deu bom";
            $_SESSION['Categoria'] = "Solicitado";
        }
        else 
        {
            echo "deu bosta<br>";
        }
      
    }