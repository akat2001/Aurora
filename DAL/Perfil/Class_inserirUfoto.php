<?php
    //Incluir a conexão com banco de dados
    include_once '../../nav_home.php';


    $UimgExt = strtolower(substr($_FILES['Uimg']['name'],-4));//Pega o nome da extesão
    $UimgNNo = $_SESSION['User_Name'] . $UimgExt; //Nomeia o arquivo
    $UimgPasta = "../../uploads/img_Uperf/"; //Defini o nome da pasta em que o arquivo será salvo
    
    if(file_exists($UimgPasta.$UimgNNo))
    {
        unlink($UimgPasta.$UimgNNo); //Deleta caso arquivo já exista
        move_uploaded_file($_FILES['Uimg']['tmp_name'], $UimgPasta.$UimgNNo);//efetua o upload
    }
    else
    {
        move_uploaded_file($_FILES['Uimg']['tmp_name'], $UimgPasta.$UimgNNo);//efetua o upload
    }

    $_SESSION['UimgNNo'] = $UimgNNo; //Amazena o novo nome na sessão

    $_SESSION['auxiliar'] = "Sucesso ao alterar seus dados"; 

    header("Location: ../../perfil.php");

?>