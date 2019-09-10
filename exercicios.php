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
	
	<body class="grey lighten-5">

		<?php	
		    include 'nav_home.php';
		?>
	
        <main>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 center-align"> 
                        <h4>Exercícios</h4>
                    </div> 
                </div>
                <div class="row center-align">
                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo da Disciplina--> 
                                <optgroup label="Selecione:">            
                                    <option value="#">Disciplina 1</option>
                                    <option value="#">Disciplina 2</option>
                                    <option value="#">Disciplina 3</option>
                                </optgroup>     
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo do Conteúdo--> 
                                <optgroup label="Selecione:">            
                                    <option value="#">Conteúdo 1</option>
                                    <option value="#">Conteúdo 2</option>
                                    <option value="#">Conteúdo 3</option>
                                </optgroup>     
                            </select>  
                            <label>Conteúdo</label>              
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo do Conteúdo--> 
                                <optgroup label="Selecione:"> 
                                    <option value="#">Não</option>           
                                    <option value="#">Sim</option>   
                                </optgroup>     
                            </select>  
                            <label>Respondidas?</label>              
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <button class="btn waves-effect waves-light center-align col s12 m12 l12 orange darken-2" type="button" name="" onclick="">Filtrar</button> 
                        </div>
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col s12">
                        <form action="" method=""> 
                            <h6><strong>1 (XXXXXXX 20XX) </strong> </h6> <!-- Nº1 corresponde ao número da questão no BD // (XXXXXXX - 20XX) representa a prova e 20XX o ano. EX: (Enem 2009)-->
                            <p> Nullam non risus quis orci aliquet finibus. Fusce consequat nibh et dui iaculis rhoncus. Aliquam eu sem sem. Proin laoreet nisl sed dui egestas luctus. Cras at facilisis quam, a fermentum lorem. Suspendisse velit ex, semper eu accumsan eleifend, pulvinar et nunc. Morbi eleifend augue vel dolor finibus, at aliquet arcu tempor. Proin et felis auctor, mattis odio eget, volutpat risus. Quisque ultrices, est vel vehicula cursus, dui orci pellentesque ante, in interdum mauris est non massa? </p>

                            <!-- Só aparece se a questão tiver imagem... -->
                            <p> <img src="img/BannerLogo.png" class="responsive-img"/></p>

                            <div class="collection">
                                <a href="#!" class="collection-item"><b>A</b> &nbsp; &nbsp; Cras at facilisis </a>
                                <a href="#!" class="collection-item active"><b>B</b> &nbsp; &nbsp; Aliquam eu sem sem</a>
                                <a href="#!" class="collection-item"><b>C</b> &nbsp; &nbsp; Morbi eleifend augue</a>
                                <a href="#!" class="collection-item"><b>D</b> &nbsp; &nbsp;  Nullam non risus quis </a>
                                <a href="#!" class="collection-item"><b>E</b> &nbsp; &nbsp; Quisque ultrices </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-2 center-align">
                    <div class="input-field col s12 m12 center-align">
                  
                        <button class="btn waves-effect waves-light orange darken-2" type="button" name="action" onclick="">Responder</button> 
                        
                    </div>
                    <div class="col s12 m12">
                        <!--Paginação de acordo com o número de questões-->
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>

                    </div> 
                </div>



            </div>
        </main>

        <script>
            M.AutoInit();
        </script>
    
	</body>
	
</html>




