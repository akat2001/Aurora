<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>

<?php

     include_once '../Class_conexao_DAL.php';
     $cod_edit = $_GET['id'];

     $edit = mysqli_real_escape_string($conexao, $_POST['perguntaedit']);

     $sql = "UPDATE TB_Perguntas_forum SET pergunta = '$edit' WHERE cod_pergunta = '$cod_edit'";

     $result = Func_executeupdate_DAL($sql);

     echo $sql;

     if($result == "Registros atualizados com sucesso.")
    {
        echo'<div id="modal1" class="modal">                     
        <div class="modal-content">
            <div class="row center-align">
                <div class="row">
                    <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                </div>
                <h4>Pergunta editada com sucesso! </h4>
            <p> Clique em "OK" para continuar! </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../home.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>';
    }
    else
    {
        echo 'deu bosta';
    }


?>

<script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('#modal1').modal();
        $('#modal1').modal('open'); 
    });
</script>