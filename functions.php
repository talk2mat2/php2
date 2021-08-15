<?php
include('./database.php');
include('./usersmodel.php');

//initiate obect of the database class
$db = new Dbcontroller();
$users= new Users($db);




print_r($users->getAllusers($tableName="users"));






