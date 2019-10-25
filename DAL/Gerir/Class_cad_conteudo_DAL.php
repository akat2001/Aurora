<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>

<?php
    //aquivo chamado no action do formulario de login
    session_start();
    require_once "../Class_conexao_DAL.php";
    require_once "Class_cadastrar_conteudo_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
    
    //pega os valores do formulario
    $objeto['tema'] = mysqli_real_escape_string($conexao, $_POST['conteudo']);
    $objeto['titulo'] = mysqli_real_escape_string($conexao, $_POST['titulo-topico']);
    $objeto['conteudo'] = mysqli_real_escape_string($conexao, $_POST['texto']);

    //chama função que vai buscar os dados no banco
    $result = Func_cad_conteudo($objeto);

    if($result == "conteudo em analise")
    {    


        //tudo deu certo, abre modal alertando
        echo('<div id="modal1" class="modal">                     
        <div class="modal-content">
            <div class="row center-align">
                <div class="row">
                    <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                </div>
                <h4>Seu conteúdo foi enviado para análise!</h4>
            <p> Em breve você receberá um email de confirmação da equipe informando se o seu conteúdo foi aprovado. </p>
            <p> Clique em "Ok" para continuar. </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
            
        ');
    }
    else
    {
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = $result;    
        echo $result;   
       
    }
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    
?>

<!--Vinculando Scripts para correta exibição do modal-->
<script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('#modal1').modal();
    $('#modal1').modal('open'); 
  });
</script>