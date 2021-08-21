<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $data = json_decode(file_get_contents('php://input'), true);
   
    echo(json_encode($data));

}

// echo json_encode(array("name"=>"martins"));


