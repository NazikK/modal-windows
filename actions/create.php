<?php
    require_once("../db.config");
    
    $Nomer = htmlspecialchars($_POST['Nomer']);
    $Rozmir = htmlspecialchars($_POST['Rozmir']);
    
    if(isset($Nomer) == TRUE && isset($Rozmir) == TRUE)
    {
        $conn = new mysqli($server, $user, $pwd, $db);
        
        $sql = "INSERT INTO `Kabinet`(`Nomer`, `Rozmir`) VALUES ('$Nomer','$Rozmir')";
        
        $conn->query($sql);

        $conn->close();
    }
   
?>