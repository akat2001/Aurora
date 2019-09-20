<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<?php
    //aquivo chamado no action do formulario de novo topico
    session_start();
    require_once "Class_topico_DAL.php";
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
     //pega os valores do formulario
     $topico['disciplina'] = mysqli_real_escape_string($conexao, $_POST['disciplina']);
     $topico['categoria'] = mysqli_real_escape_string($conexao, $_POST['categoria']);
     $topico['conteudo'] = mysqli_real_escape_string($conexao, $_POST['conteudo']);
     $topico['titulo'] = mysqli_real_escape_string($conexao, $_POST['titulo-topico']);
     $topico['mensagem'] = mysqli_real_escape_string($conexao, $_POST['mensagem']);
     $topico['pessoa'] = $_SESSION['pessoa'];
    
     //chama função que vai inserir os dados no banco
    $result = Func_cadastrar_DAL($topico);//localizada no arquivo Class_topico_DAL, linha 3

    if($result == "Mensagem postada com sucesso!")
    {
        echo('<div id="modal1" class="modal">
        <div class="modal-content">
         <h4>Postagem criada com sucesso!</h4>
         <p>Seu post foi criado com sucesso! Basta ir na categoria correspondente que você irá encontrá-lo. </p>
        </div>
        <div class="modal-footer">
            <a href="../../forum/forum-index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
        </div>');
    }
    elseif($result == "Campo Vazio!")
    {
        header("location: ../../forum/novo-topico.php");
    }
    else
    {
        echo "Há algo errado.";
    }
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
    