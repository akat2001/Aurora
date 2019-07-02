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
	
	<body onload=Materialize.toast>

			<?php	
				include 'nav_home.html';
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row path_top">
                                    <span><i class="small material-icons"><a class="black-text" href="aurora_forum.php">home</a></i> &nbsp; > Matemática </span>
                                </div>
                           
                                <div class="input-field col s12">
                                    <!--<i class="material-icons prefix">search</i>-->
                                    <input id="icon_prefix" type="text" class="validate" placeholder="Digite aqui para pesquisar...">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <table class="striped bordered">
                               <thead>
                                    <tr>
                                        <th class=""> Categorias </th>
                                        <th class="center-align"> Comentários </th>
                                        <th class="center-align"> Discussões </th>
                                        <!--<th class="center-align"> Post Recente </th> -->
                                    </tr>  
                                </thead>
                              
                                    
                                

                                <tbody>
                                    <tr>
                                        <td> <a class="" href=""> &nbsp; Dúvidas </a></td> 
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS dúvidas-->
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE DISCUSSÕES dúvidas-->
                
                                    </tr>
                                
                                    <tr>
                                        <td> <a class="" href=""> &nbsp; Lição de Casa </a> </td>
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS Lição de Casa-->
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE DISCUSSÕES Lição de Casa-->
                                    </tr>
                                    <tr>
                                        <td> <a class="" href=""> &nbsp; Mapas Mentais </a> </td>
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS Mapas Mentais-->
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE DISCUSSÕES Mapas Mentais-->
                                    </tr>
                                </tbody>
                            <table>
                        </div>

                        <div class="row center-align">
                            <div class="col s12">
                                <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> Novo Tópico</a></li>
                            </div>
                        </div>
                    </div>

				</section>
            </main>
        
	
		 
	
		 <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		 <script type="text/javascript" src="js/materialize.min.js"></script>
		 
		<script>
             $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
            });

            var $toastContent = $('<span><i class="small material-icons">error_outline</i> &nbsp; Tire suas dúvidas aqui!</span>');
            Materialize.toast($toastContent, 10000);
        </script>
        
	
	</body>
	
</html>




