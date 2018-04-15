<?php
    require_once("../db.config");
        
    $ID = htmlspecialchars($_POST["ID"]);

    if(isset($ID) == TRUE)
    {
        $conn = new mysqli($server, $user, $pwd, $db);
                
        $sql = "DELETE FROM `Kabinet` WHERE ID = $ID";
    
        $conn->query($sql);
    
        $conn->close();
                
    }          
?>