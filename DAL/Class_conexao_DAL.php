<?php   
    //Esta função faz a conexão com o Banco de Dados
    function Func_connect_DAL()
    {
        //variaveis de conexão
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "DB_Aurora";

        $link = mysqli_connect($host, $user, $password, $database);
        if(mysqli_connect_errno ($link))
        {
            echo "Falha na conexao com o Banco de Dados!<br />";
            echo "Erro: " . mysqli_error();
            die();
        }
        else
        {
            return $link;
        }
    }
    //Esta função executa uma Query de select
    function Func_executeselect_DAL($query)
    {
        $conexao = Func_connect_DAL();
        $result = mysqli_query($conexao, $query);
        $resultado = mysqli_fetch_assoc($result);   
          
        return $resultado;
          
        Func_fechaconexao_DAL($conexao);    
    }
    //esta funçao executa uma query de insert
    function Func_executeselect_DAL($query)
    {
        $conexao = Func_connect_DAL();
        if ( mysqli_query ( $conexao, $sql )) 
		{
			echo  "Registros adicionados com sucesso." ;
			header ("location: entrar.php");
		} 
		else
		{
			echo  "ERRO: Não foi possível capaz de executar $sql." . mysqli_error ( $conexao );
        }
        Func_fechaconexao_DAL($conexao); 
    }
    //esta função fecha a conexo
    function Func_fechaconexao_DAL($conexao)
    {
        mysqli_close($conexao);
    }
?>