<?php
session_start();
unset($_SESSION['pessoa']);
unset($_SESSION['User_Name']);
unset($_SESSION['Nome_Completo']);

header("location: index.php")
?>