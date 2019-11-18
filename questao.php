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

        <script src="BLL/ResponderQ.js"></script>
		
    </head>
	
	<body class="grey lighten-5">

		<?php	
            include 'nav_home.php';
            include_once "DAL/Class_conexao_DAL.php";

            if(isset($_POST['questaoesc']))
            {
                $n = $_POST['questaoesc']; 
            }
            else
            {
                $n = $_GET['n']; 
            }
            $_SESSION['questaoesc'] = $n;
		?>
	
        <main>
            <div class="container">
                <div class="row mt-2">
                    <div class="col s12 m12 center-align"> 
                        <h4>Exercício - <?php echo $_SESSION['pags'][$n]['CodQ'];?> </h4>
                    </div> 
                </div>
                <div id="questao"> <!--Essa div contem a questão e suas respectivas alternativas--> 
                    <div class="row">
                        <div class="col s12">
                            <form name="responder" action="DAL/Exercicios/Class_resp_exercicio.php" method="POST">
                            <input type="hidden" name ="Alt" id="Alt">
                                <?php 
                                if(isset($_SESSION['busca']))
                                {
                                    echo ' 
                                        <p> '. $_SESSION['pags'][$n]['Enunciado'] .' </p>
                                        <div class="collection">';
                                    if($_SESSION['RespQ']=="s")
                                    {
                                        //Alternativa A

                                        if($_SESSION['pags'][$n]['A'] == $_SESSION['pags'][$n]['RespS'])
                                        {
                                            echo '<a  class="collection-item active green"><b>A</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['A'] .' </a>';
                                        }
                                        else if($_SESSION['pags'][$n]['Resp'] == "A")
                                        {
                                            echo '<a  class="collection-item active red"><b>A</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['A'] .' </a>';
                                        }
                                        else
                                        {
                                            echo '<a  class="collection-item"><b>A</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['A'] .' </a>';
                                        }


                                        //Alterantiva B

                                        if($_SESSION['pags'][$n]['B'] == $_SESSION['pags'][$n]['RespS'])
                                        {
                                            echo '<a  class="collection-item active green"><b>B</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['B'] .' </a>';
                                        }
                                        else if($_SESSION['pags'][$n]['Resp'] == "B")
                                        {
                                            echo '<a  class="collection-item active red"><b>B</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['B'] .' </a>';
                                        }
                                        else
                                        {
                                            echo '<a  class="collection-item"><b>B</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['B'] .' </a>';
                                        }

                                        //Alternativa C

                                        if($_SESSION['pags'][$n]['C'] == $_SESSION['pags'][$n]['RespS'])
                                        {
                                            echo '<a  class="collection-item active green"><b>C</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['C'] .' </a>';
                                        }
                                        else if($_SESSION['pags'][$n]['Resp'] == "C")
                                        {
                                            echo '<a  class="collection-item active red"><b>C</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['C'] .' </a>';
                                        }
                                        else
                                        {
                                            echo '<a  class="collection-item"><b>C</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['C'] .' </a>';
                                        }


                                        //Alterantiva D

                                        if($_SESSION['pags'][$n]['D'] == $_SESSION['pags'][$n]['RespS'])
                                        {
                                            echo '<a  class="collection-item active green"><b>D</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['D'] .' </a>';
                                        }
                                        else if($_SESSION['pags'][$n]['Resp'] == "D")
                                        {
                                            echo '<a  class="collection-item active red"><b>D</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['D'] .' </a>';
                                        }
                                        else
                                        {
                                            echo '<a  class="collection-item"><b>D</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['D'] .' </a>';
                                        }


                                        //Alterantiva E

                                        if($_SESSION['pags'][$n]['E'] == $_SESSION['pags'][$n]['RespS'])
                                        {
                                            echo '<a  class="collection-item active green"><b>E</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['E'] .' </a>';
                                        }
                                        else if($_SESSION['pags'][$n]['Resp'] == "E")
                                        {
                                            echo '<a  class="collection-item active red"><b>E</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['E'] .' </a>';
                                        }
                                        else
                                        {
                                            echo '<a  class="collection-item"><b>E</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['E'] .' </a>';
                                        }
                                    }
                                    else
                                    {
                                        echo ' 
                                            <a onclick="CorAltA('.$_SESSION['pags'][$n]['CodQ'].')" id="A" class="collection-item"><b>A</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['A'] .' </a>
                                            <a onclick="CorAltB('.$_SESSION['pags'][$n]['CodQ'].')" id="B" class="collection-item"><b>B</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['B'] .' </a> <!--A alternativa certa aparece como verde -->
                                            <a onclick="CorAltC('.$_SESSION['pags'][$n]['CodQ'].')" id="C" class="collection-item"><b>C</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['C'] .' </a> <!-- Caso o usuário responda errado, a alternativa respondida recebe a classe active red-->
                                            <a onclick="CorAltD('.$_SESSION['pags'][$n]['CodQ'].')" id="D" class="collection-item"><b>D</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['D'] .' </a>
                                            <a onclick="CorAltE('.$_SESSION['pags'][$n]['CodQ'].')" id="E" class="collection-item"><b>E</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['E'] .' </a>
                                            </DIV>
                                            <div class="row center-align">
                                            <a onclick="RespostaQ()" class="btn waves-effect waves-light orange darken-2"> Responder </a>
                                            </div>
                                            ';
                                    }
                                    echo '</div>
                                    <!-- uma vez respondida, as questões não podem mais ser respondidas -->';
                                    }
                                ?>
                                <input type="hidden" name ="resposta" id="resposta">
                            </form>
                        </div>
                    </div>
                    <?php 
                    if(isset($_SESSION['busca']) && $_SESSION['RespQ'] == "s"){
                    echo '
                    <div class="row"> <!-- essa row só aparece depois que o usuário responder -->
                        <div class="col s12">
                            <h6>Resolução</h6>
                        </div>
                        <div class="col s12">
                            <p> '.$_SESSION['pags'][$n]['Resol'].'</p>
                            <!-- <p> é a resolução do banco, só pode aparecer depois que a questão for respondida -->
                        </div>
                        <div class="col s12">
                        <b> Dificuldade: </b> '. $_SESSION['pags'][$n]['Dificuldade'] .' </span>
                        </div>
                        <div class="row center-align">
                        <a href="exercicios.php" class="btn waves-effect waves-light orange darken-2"> Voltar </a>
                        </div>
                    </div>
                </div>
                ';}?>
                 <div class="row center-align">
                                            <div class="col s12">
                                                <h6 class="red-text" id="Retorno"> </h6> 
                                                
                                                <h6 class="red-text">
                                                    <?php
                                                        if (isset($_SESSION['auxiliar']))
                                                        {
                                                            echo $_SESSION['auxiliar'];
                                                            unset ($_SESSION['auxiliar']);							
                                                        }
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
            </div>            
        </main>

        <script type="text/javascript">google.load("jquery", "1.12.1");</script>
		
        <script type="text/javascript" charset="UTF-8">

        $(function()
        {   //quando selecionar a disciplina
            $('#id_disciplina').change(function()
            {
                $('#conteudo').html("");
                 //limpa campo conteúdo
               
                if( $(this).val()) 
                {  

                    //chama o arquivo e executa o select que tambem tranfere os dados para uma variavel js
                    $.getJSON('DAL/forum/Class_conteudo_DAL.php?search=',{id_conteudo: $(this).val(), ajax: 'true'}, function(j)
                        {   //inicia o for que mostra os conteudos
                            var options = ' <option value="" disabled selected> Selecione </option>';	
                            for (var i = 0; i < j.length; i++) 
                            {
							    options += '<option value="' + j[i].cod_tema + '">' + j[i].tema + '</option>';
						    }//mostra os dados na tela
                            $('#conteudo').html(" <select id='id_conteudo' name='conteudo' required> </select> <label>Conteúdo</label> "); 
                            $('#id_conteudo').append(options); 
                            $('select').formSelect();
                                                         
                                                     
					    });
                    ;
                } 
                else 
                {   //se nao funcionar nao faz nada
					$('#id_conteudo').html('<option value="">– Escolha Conteudo –</option>');
				}
			});
		});

		</script>

        <script>
            M.AutoInit();
        </script>
    
	</body>
	
</html>




