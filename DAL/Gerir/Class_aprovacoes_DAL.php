<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>

<?php	      
    session_start();
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
            //tudo deu certo, abre modal alertando
            echo'<div id="modal1" class="modal">                     
            <div class="modal-content">
                <div class="row center-align">
                    <div class="row">
                        <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                    </div>
                    <h4>Conteúdo aprovado! </h4>
                <p> Entre em contato com o autor informando a aprovação de seu conteúdo. </p>
                <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                </div>
            </div>
            
            <div class="modal-footer">
                <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
            </div>';
        }
        else 
        {
              //deu erro, abre modal alertando
              echo'<div id="modal1" class="modal">                     
              <div class="modal-content">
                  <div class="row center-align">
                      <div class="row">
                          <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                      </div>
                      <h4>Falha ao aprovar conteúdo! </h4>
                  <p> Ocorreu um erro ao tentar aprovar o conteúdo. Tente novamente! </p>
                  <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                  </div>
              </div>
              
              <div class="modal-footer">
                  <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
              </div>';
        }

    }
    if($tipo == 'conteudo' && $acao == 'recusar')
    {//recusar coteudo
        $sql = "UPDATE tb_conteudo SET estado ='Recusado' WHERE cod_conteudo = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
             //tudo deu certo, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Conteúdo recusado! </h4>
                 <p> Entre em contato com o autor informando a recusa de seu conteúdo. </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
        else 
        {
             //deu erro, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Falha ao recusar conteúdo! </h4>
                 <p> Ocorreu um erro ao tentar recusar o conteúdo. Tente novamente! </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
    }
    if($tipo == 'questao' && $acao == 'aprovar')
    {//aprovar questao
        $sql = "UPDATE tb_questoes SET estado ='Aprovado' WHERE cod_pergunta = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
             //tudo deu certo, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Questão aprovada! </h4>
                 <p> Entre em contato com o autor informando a aprovação de sua questão. </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
        else 
        {
              //deu erro, abre modal alertando
              echo'<div id="modal1" class="modal">                     
              <div class="modal-content">
                  <div class="row center-align">
                      <div class="row">
                          <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                      </div>
                      <h4>Falha ao aprovar questão! </h4>
                  <p> Ocorreu um erro ao tentar aprovar a questão. Tente novamente! </p>
                  <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                  </div>
              </div>
              
              <div class="modal-footer">
                  <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
              </div>';
        }
    }
    if($tipo == 'questao' && $acao == 'recusar')
    {//recusar questao
        $sql = "UPDATE tb_questoes SET estado ='Recusado' WHERE cod_pergunta = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
             //tudo deu certo, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Questão recusada! </h4>
                 <p> Entre em contato com o autor informando a recusa de sua questão. </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
        else 
        {
             //deu erro, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Falha ao recusar questão! </h4>
                 <p> Ocorreu um erro ao tentar recusar a questão. Tente novamente! </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
    }
    if($tipo == 'usuario' && $acao == 'aprovar')
    {//aprovar tutor
        $sql = "UPDATE tb_pessoa SET tipo ='Tutor' WHERE cod_pessoa = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
             //tudo deu certo, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Solicitação de Tutoria aprovada! </h4>
                 <p> Entre em contato com o usuário informando a aprovação de sua Tutoria. </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
        else 
        {
             //deu erro, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Falha ao aprovar tutoria! </h4>
                 <p> Ocorreu um erro ao tentar aprovar o usuário para se tornar um tutor. Tente novamente! </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
    }
    if($tipo == 'usuario' && $acao == 'recusar')
    {//recusar tutor
        $sql = "UPDATE tb_pessoa SET tipo = 'Aluno' WHERE cod_pessoa = '$id'";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
             //tudo deu certo, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>A atualização de Tutoria foi realizada! </h4>
                 <p> O sistema atualizou os registros com sucesso. Entre em contato com o usuário informando sua remoção ou recusa de tutoria. </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
        else 
        {
             //deu erro, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Falha ao atualizar o registro! </h4>
                 <p> Ocorreu um erro ao tentar atualizar o registro do papel do usuário. Tente novamente! </p>
                 <p> Clique em "OK" para voltar para a página de gerenciamento. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../gerir.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
    }
    if($tipo == 'usuario' && $acao == 'tutoria')
    {//excluir tutor
        $sql = "UPDATE tb_pessoa SET tipo = 'Solicitado' WHERE cod_pessoa = '$id' ";
        $resultado = Func_executeupdate_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
        if($resultado == "Registros atualizados com sucesso.")
        {
            $_SESSION['Categoria'] = "Solicitado";
             //tudo deu certo, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4> Recebemos sua solicitação! </h4>
                 <p> Em breve você receberá um email da equipe informando o andamento de sua solicitação. </p>
                 <p> Clique em "OK" para voltar para a página inicial. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../home.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
        else 
        {
             //deu erro, abre modal alertando
             echo'<div id="modal1" class="modal">                     
             <div class="modal-content">
                 <div class="row center-align">
                     <div class="row">
                         <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                     </div>
                     <h4>Falha ao enviar solicitação! </h4>
                 <p> Ocorreu um erro ao enviar sua soliticação. Tente novamente! </p>
                 <p> Clique em "OK" para voltar para a página de perfil. </p>
                 </div>
             </div>
             
             <div class="modal-footer">
                 <a href="../../perfil.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
             </div>';
        }
      
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
    
    