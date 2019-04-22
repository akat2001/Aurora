<?php

    function Func_pessoa_DTO()
    {
       // $pessoa['nome'] = $_POST[''];
       // $pessoa['sexo'] = $_POST[''];
       // $pessoa['data_nascimento'] = $_POST[''];
       // $pessoa['foto'] = $_POST[''];
       // $pessoa['usernick'] = $_POST[''];
        $pessoa['email'] = $_POST['email'];
        $pessoa['senha'] = $_POST['senha'];
       // $pessoa['cidade'] = $_POST[''];
       // $pessoa['auxiliar'] = $_POST[''];
        
        return $pessoa;
    }

?>