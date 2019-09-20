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
		?>
	
		<main>	
			<div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 class="user_forum"> Olá, <?php echo $_SESSION['User_Name']; ?> </h5>
                        <h6> Exibindo conteúdos de $nome_conteudo </h6>
                    </div>
                </div>
                      

                <div class="row">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th class=""> Sub-conteúdos </th>
                            </tr> 
     
                        </thead>    
                        <tbody>
                            <tr><td> <a class="" href="exibir.php"> Título do Conteúdo </a> </td> </tr>
                            <tr><td> <a class="" href="exibir.php"> Título do Conteúdo </a> </td> </tr>
                            <tr><td> <a class="" href="exibir.php"> Título do Conteúdo </a> </td> </tr>
                            <tr><td> <a class="" href="exibir.php"> Título do Conteúdo </a> </td> </tr>
                            <tr><td> <a class="" href="exibir.php"> Título do Conteúdo </a> </td> </tr>

                        </tbody>
                    </table>
                    
                </div>

                <div class="row center-align">
                    <div class="col s12">
                        <a href="gerir.php" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> ADICIONAR CONTEÚDO </a> <!--Só aparece apra tutores-->
                    </div>
                </div>
            </div>	
        </main>

		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		 
		<script>
            M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp; Escolha o conteúdo que deseja estudar!</span>'})
        </script>
        
	</body>
	
</html>




