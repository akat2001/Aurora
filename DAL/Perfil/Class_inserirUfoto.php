<?php
    try
    {
        $UimgNNo = $_SESSION['User_Name'] . $UimgExt; //Nomeia o arquivo
        $UimgPasta = "../../uploads/img_Uperf"; //Defini o nome da pasta em que o arquivo será salvo
                    
        move_uploaded_file($_FILES['Uimg']['tmp_name'], $UimgPasta.$UimgNNo);//efetua o upload

        $_SESSION['UimgNNo'] = $UimgNNo; //Amazena o novo nome na sessão
    }
    catch(Exception $ex)
    {
        $_SESSION['UimgNNo'] = null;
    }
    header("Location: Class_alterarU_DAL.php");
?>