<?php


//users model class
class Users{
    public $db=null;
 //first check if theres is conn ,if not conn we return null. else we assign local db to the argurement db
    public function __construct(Dbcontroller $db)
    {
      if(!isset($db->conn)) return null;
      $this->db=$db;
    } 

    public function getAllusers($tableName){
$sql= "select * from ".$tableName;
$result= $this->db->conn->query($sql);
$resultArray= array();
while($item = mysqli_fetch_assoc($result)){
   
    $resultArray[]=$item;
}

return $resultArray;
    }

}

