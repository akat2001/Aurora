<?php
    Function Func_logar_DAL($objeto)
    {       
        //teste se as variaveis estão vazias 
        if ((!empty($objeto)) && (!empty($objeto['email'])) && (!empty($objeto['senha'])))
        {
            //tranfere os valores do array para variaveis
            $email =  $objeto['email'];            
            $senha =  $objeto['senha'];        
            //cria a querry
            $sql = "SELECT TBP.usernick, TBU.pessoa FROM TB_Usuario AS TBU, TB_Pessoa AS TBP WHERE TBU.email = '$email' && TBU.senha = '$senha' && TBU.pessoa = TBP.cod_pessoa LIMIT 1";
            //chama função que vai conectar ao banco e executar a query
            $resultado = Func_executeselect_DAL($sql);
            //testa o resultado da query
            if (empty($resultado))
            {
                //caso ao encontre os valores manda erro
                $objeto['auxiliar'] = "erro";            
            }
            else 
            {
                //se encontrar manda os dados
                $_SESSION['pessoa'] = $resultado['pessoa'];
                $objeto['usernick'] = $resultado['usernick'];
                $objeto['auxiliar'] = "logar";           
            }
        }
        else
        {
            //caso algum campo esteja vazio
            $objeto['auxiliar'] =  "campo vazio";
        }
        //retorna os resultados para a validação
        return $objeto;
    }

?>