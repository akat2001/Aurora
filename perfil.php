<!DOCTYPE html>
<html>
    <head>
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
	
	<body class="grey lighten-3">

			<?php	
				include 'nav_home.html';
				?>
	
			<main>	

                 <div class="row center-align mt-5">
                    <div class="col s12">
                        <h5> Meu Perfil </h5>
                    </div>
                </div>
                <div class="row center-align mt-5">
                    <div class="col s4 l2 offset-s4 offset-l2">
                        <img class="responsive-img" id="#" src="img/usericon.png" id=""> <!--Foto de Perfil do usuário-->
                    </div>
                </div>
                <div class="row center-align">
                    <div class="input-field col s8 m8 l4  offset-s2 offset-m2 offset-l3">
                        <input id="name" type="text" placeholder="$nomedousuario" name="nome" class="validate"><!--Campo Nome-->
                        <label for="name"> Nome </label>
                    </div>
                </div>
                <div class="row center-align">
                    <div class="input-field col s8 m8 l4  offset-s2 offset-m2 offset-l3">
                        <input id="email" type="email" placeholder="$email" name="email" class="validate"> <!--Campo Nome-->
                        <label for="email"> Email </label>
                        <span class="helper-text" data-error="" data-success=""></span>
                    </div>
                </div>
                <div class="row center-align">
                    <div class="input-field col s8 m8 l4 offset-s2 offset-m2 offset-l3" >
                        <input id="passuser" type="password" placeholder="*******" name="senha" class="validate" required>
                        <label for="passuser"> Senha </label> <!--Campo Senha-->
                    </div>
                </div>
                <div class="row center-align">
                    <div class="col s4 offset-s2">
                        <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> save </i> Salvar </a></li>
                    </div>
                    <div class="col s4">
                        <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> </i> Cancelar </a></li>
                    </div>
                </div>
				
			</main>
	
		 
	
		 <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		 <script type="text/javascript" src="js/materialize.min.js"></script>
		 
		
	
	</body>
	
</html>




