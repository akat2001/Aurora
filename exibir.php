<!DOCTYPE html>
<html>
    <head>
        <title> Aurora </title>
        <meta charset="utf-8">
        <!--Importando Ícone da Google Font-->
         <link href="css/icon.css" rel="stylesheet">
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
		
    </head>
	
	<body>
		<?php	
            include 'nav_home.php';          
            include 'DAL/Class_conexao_DAL.php'; 
            $cont = $_GET['cont'];      
		?>
	
		<main>	
			<div class="container">
            <?php
                //Incluir a conexão com banco de dados
                $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3    
                $sql = "SELECT C.titulo, C.texto, U.usernick, C.estado from tb_conteudo AS C, tb_usuario AS U where U.pessoa = C.pessoa and cod_conteudo = '$cont';";
                // executa a query
                $dados = mysqli_query($conexao, $sql);
                // transforma os dados em um array
                $linha = mysqli_fetch_assoc($dados);
                //mostra o conteudo a ser estudado
                echo '<div class="row mb-2">';
                echo $linha['texto'].' <br> <h5 class="mb-2"> Conteúdo disponibilizado por: '.$linha['usernick']. '</h5>';
                echo '</div>';
                                                  
                ?>
            </div>	
            <?php
            if($linha['estado'] == 'Em analise')
            {
                echo '<div id="aprov">
                <div class="row center-align">
                    <h6> Aprovar conteúdo? </h6>
                    <a class="btn waves-effect waves-light green darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id='.$cont.'&acao=aprovar&tipo=conteudo"> V </a> <a class="btn waves-effect waves-light red darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id='.$cont.'&acao=recusar&tipo=conteudo"> X </a>
                
                </div> 
                </div>';
            }
            ?>

        </main>

		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		 
        
	</body>
	
</html>




