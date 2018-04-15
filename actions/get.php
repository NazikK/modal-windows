<?php
    require_once("../db.config");
    
    $conn = new mysqli($server, $user, $pwd, $db);
    
    $sql = "SELECT * FROM  `Kabinet`";
    
    $result = $conn->query($sql);
    
    $Array = array();
    
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            array_push($Array, array(
                "ID" => $row["ID"],
                "Nomer" => $row["Nomer"],
                "Rozmir" => $row["Rozmir"]
            ));
        }
    }
    
    $conn->close();
    
    echo json_encode($Array); //cockie php sesion php times js реєстрація (sokect  signalR) CSRF
?>