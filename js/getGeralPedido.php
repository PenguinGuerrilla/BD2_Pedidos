<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../config.php");
$sql2 = "SELECT * FROM produto order by nome";
    $result2 = $conn->query($sql2);
    $qtd2 = $result2->num_rows; 

    if($qtd2){
        $response2["rows"] = Array();
        while($row2 = $result2->fetch_object()){
            $response2["rows"][] = $row2;
        }   
        echo json_encode($response2["rows"]);
    }
?>