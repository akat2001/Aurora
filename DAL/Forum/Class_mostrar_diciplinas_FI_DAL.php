<?php                                                                             
    $sql = "SELECT * FROM  TB_materias";
    $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
    // executa a query
    $dados = mysqli_query($conexao, $sql);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);
    do
    {
        echo '<tr>
                <td> <i class="'.$linha["cor"].'-text material-icons"> '.$linha["imagem"].' </i> <a class="" href="categorias.php?disc='.$linha["Nome"].'"> '.$linha["Nome"].' </a></td>
                <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS PORTUGUÊS-->
                <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE DISCUSSÕES PORTUGUÊS-->
                <!--<td  class="center-align"> <span> $nome_post (link) <span> </td>  POST RECENTE PORTUGUÊS-->
            </tr>';
    }while($linha = mysqli_fetch_assoc($dados));// finaliza o loop que vai mostrar os dados                                             
   
    Func_fechaconexao_DAL($conexao);
