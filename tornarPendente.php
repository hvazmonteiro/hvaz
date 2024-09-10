<?php

    include('php/protect.php');
    $hora = date('H:i');

    if (!empty($_GET['id']))
    {
        include_once('php/conexao.php');
        

        $id = $_GET['id'];
          

        $sqlSelect = "SELECT  * FROM maqueiros WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){
            {
                $sqlUpdate = "UPDATE snd.maqueiros SET maqueiros.statusc = 'Pendente' WHERE id=$id";
                $resultDelete = $mysqli->query($sqlUpdate);
            }
        }



    }
    header('Location: atender.php');

?>
