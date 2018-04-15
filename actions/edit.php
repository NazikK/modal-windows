<?php
    require_once("../db.config");
    
    $ID = $_POST["ID"];
    $Nomer = htmlspecialchars($_POST['Nomer']);
    $Rozmir = htmlspecialchars($_POST['Rozmir']);
    
    if(isset($Nomer) == TRUE && isset($Rozmir) == TRUE && isset($ID) == TRUE)
    {
    
        $conn = new mysqli($server, $user, $pwd, $db);

        $sql = "UPDATE `Kabinet` SET `Nomer`=$Nomer,`Rozmir`=$Rozmir WHERE `ID` = $ID";
        
        $conn->query($sql);
        
        $conn->close();
    }
    
?>