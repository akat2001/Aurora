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
                <div class="row mt-2">
                    <div class="col s12 m8"> 
                        <h6><b>Questões:</b> $Nome_do_Conteudo </h6>
                    </div> 
                </div>
                <div class="row mt-2">
                    <div class="col s12">
                        <form action="" method=""> 
                            <h6><strong>1 (XXXXXXX 20XX) </strong> </h6> <!-- Nº1 corresponde ao número da questão no BD // (XXXXXXX - 20XX) representa a prova e 20XX o ano. EX: (Enem 2009)-->
                            <p> Nullam non risus quis orci aliquet finibus. Fusce consequat nibh et dui iaculis rhoncus. Aliquam eu sem sem. Proin laoreet nisl sed dui egestas luctus. Cras at facilisis quam, a fermentum lorem. Suspendisse velit ex, semper eu accumsan eleifend, pulvinar et nunc. Morbi eleifend augue vel dolor finibus, at aliquet arcu tempor. Proin et felis auctor, mattis odio eget, volutpat risus. Quisque ultrices, est vel vehicula cursus, dui orci pellentesque ante, in interdum mauris est non massa? </p>

                            <!-- Só aparece se a questão tiver imagem... -->
                            <p> <img src="img/BannerLogo.png" class="responsive-img"/></p>

                            <p class="" id="qa">
                                <b>A. </b> <input class="with-gap" name="resposta" type="radio" id="a"/>
                                <label for="a" class="black-text">Aliquam eu sem sem</label>
                            </p>
                            <p class="teal lighten-3" id="qb">
                                <b>B. </b> <input class="with-gap" name="resposta" type="radio" id="b"/>
                                <label for="b" class="black-text">Proin et felis auctor</label>
                            </p>
                            <p class="" id="qc">
                                <b>C. </b> <input class="with-gap" name="resposta" type="radio" id="c"/>
                                <label for="c" class="black-text">Suspendisse velit ex</label>
                            </p>
                            <p class="red lighten-2" id="qd"> <!--Quando marcar a alternativa errada, o P correspondente recebe a classe red lighten-2 e a alternativa correta recebe teal lighten-3-->
                                <b>D. </b> <input class="with-gap" name="resposta" type="radio" id="d" checked/>
                                <label for="d" class="black-text">Nullam non risus quis orci</label>
                            </p>
                            <p class="" id="qe">
                                <b>E. </b> <input class="with-gap" name="resposta" type="radio" id="e"/>
                                <label for="e" class="black-text">Morbi eleifend augue vel dolor finibus</label>
                            </p>

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

            
		
	
	</body>
	
</html>




