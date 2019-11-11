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
            include_once "DAL/Class_conexao_DAL.php"; 
            $id = $_GET['id'];
            $sql = "SELECT * FROM tb_questoes WHERE cod_pergunta = '$id'";
            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
            // executa a query
            $dados = mysqli_query($conexao, $sql);
            // transforma os dados em um array
            $linha = mysqli_fetch_assoc($dados);
		?>
	
        <main>
            <div class="container">
                <div class="row mt-2">
                    <div class="col s12 m12 center-align"> 
                        <h4>Questão em analise</h4>
                    </div> 
                </div>
                <div id="questao"> <!--Essa div contem a questão e suas respectivas alternativas--> 
                    <div class="row">
                        <div class="col s12">
                            <h6><strong>CÓDIGO DA QUESTÃO <?php echo $linha['cod_pergunta']; ?> </strong>  </h6> <!--código da questão no banco -->
                            <p> <?php echo $linha['enunciado']; ?> </p>                            

                            <div class="collection">
                                <?php
                                    switch($linha['resposta'])
                                    {
                                        case  $linha['alt_a']:
                                        echo '<a id="a" class="collection-item active green"><b>A</b> &nbsp; &nbsp; '.$linha['alt_a'].' </a>
                                            <a id="b" class="collection-item"><b>B</b> &nbsp; &nbsp; '.$linha['alt_b'].'</a> 
                                            <a id="c" class="collection-item"><b>C</b> &nbsp; &nbsp; '.$linha['alt_c'].'</a> 
                                            <a id="d" class="collection-item"><b>D</b> &nbsp; &nbsp; '.$linha['alt_d'].'</a>
                                            <a id="e" class="collection-item"><b>E</b> &nbsp; &nbsp; '.$linha['alt_e'].'</a>';
                                        break;
                                        case $linha['alt_b']:
                                        echo '<a id="a" class="collection-item"><b>A</b> &nbsp; &nbsp; '.$linha['alt_a'].' </a>
                                            <a id="b" class="collection-item active green"><b>B</b> &nbsp; &nbsp; '.$linha['alt_b'].'</a> 
                                            <a id="c" class="collection-item"><b>C</b> &nbsp; &nbsp; '.$linha['alt_c'].'</a> 
                                            <a id="d" class="collection-item"><b>D</b> &nbsp; &nbsp; '.$linha['alt_d'].'</a>
                                            <a id="e" class="collection-item"><b>E</b> &nbsp; &nbsp; '.$linha['alt_e'].'</a>';
                                        break;
                                        case $linha['alt_c']:
                                        echo '<a id="a" class="collection-item"><b>A</b> &nbsp; &nbsp; '.$linha['alt_a'].' </a>
                                            <a id="b" class="collection-item"><b>B</b> &nbsp; &nbsp; '.$linha['alt_b'].'</a> 
                                            <a id="c" class="collection-item active green"><b>C</b> &nbsp; &nbsp; '.$linha['alt_c'].'</a> 
                                            <a id="d" class="collection-item"><b>D</b> &nbsp; &nbsp; '.$linha['alt_d'].'</a>
                                            <a id="e" class="collection-item"><b>E</b> &nbsp; &nbsp; '.$linha['alt_e'].'</a>';
                                        break;
                                        case $linha['alt_d']:
                                        echo '<a id="a" class="collection-item"><b>A</b> &nbsp; &nbsp; '.$linha['alt_a'].' </a>
                                            <a id="b" class="collection-item"><b>B</b> &nbsp; &nbsp; '.$linha['alt_b'].'</a> 
                                            <a id="c" class="collection-item"><b>C</b> &nbsp; &nbsp; '.$linha['alt_c'].'</a> 
                                            <a id="d" class="collection-item active green"><b>D</b> &nbsp; &nbsp; '.$linha['alt_d'].'</a>
                                            <a id="e" class="collection-item"><b>E</b> &nbsp; &nbsp; '.$linha['alt_e'].'</a>';
                                        break;
                                        case $linha['alt_e']:
                                        echo '<a id="a" class="collection-item"><b>A</b> &nbsp; &nbsp; '.$linha['alt_a'].' </a>
                                            <a id="b" class="collection-item"><b>B</b> &nbsp; &nbsp; '.$linha['alt_b'].'</a> 
                                            <a id="c" class="collection-item"><b>C</b> &nbsp; &nbsp; '.$linha['alt_c'].'</a> 
                                            <a id="d" class="collection-item"><b>D</b> &nbsp; &nbsp; '.$linha['alt_d'].'</a>
                                            <a id="e" class="collection-item active green"><b>E</b> &nbsp; &nbsp; '.$linha['alt_e'].'</a>';
                                        break;
                                    }
                                ?>                        
                                
                            </div>                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col s12">
                            <h6>Resolução</h6>
                        </div>
                        <div class="col s12">
                            <p> <?php echo $linha['resolucao']; ?></p>                           
                        </div>
                        <div class="col s12">
                        <b> Dificuldade: </b> <?php echo $linha['dificuldade']; ?>
                        </div>
                    </div>
                    <!-- Essa div só aparece no momento da análise da questão-->
                    </div>
                    <div id="aprov">
                        <div class="row center-align">
                            <h6> Aprovar questão? </h6>
                            <a class="btn waves-effect waves-light green darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id=<?php echo $id; ?>&acao=aprovar&tipo=questao"> V </a> <a class="btn waves-effect waves-light red darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id=<?php echo $id; ?>&acao=recusar&tipo=questao"> X </a>
                        
                        </div> 
                    </div>

                </div>                
            </div>
        </main>