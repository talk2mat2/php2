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
   //array_push shortcut
    $resultArray[]=$item;
    //array_push($resultArray,$item);
}

return $resultArray;
    }


    public function RegisterUser($email,$username,$password){
   
        $real_email= $this->db->conn->real_escape_string($email);
$sql= "INSERT INTO users (username,password,email) values ('$username','$password','$real_email')";
//prevent sql injection
// $sql2= "INSERT INTO users (username,password,email) values (':$username',':$password',':$real_email')";
// $statement=$this->db->conn->prepare($sql2);
// $statement->exe

print($sql);
$result= $this->db->conn->query($sql);
if($result===TRUE){
ECHO "saved to database";
header("Location: ".$_SERVER['PHP_SELF']);
}
else{
    echo "an error occured";
}
print_r($result);
    }

public function deleteUser ($id){
if(!isset($id)){
    return;
}
$realid= $this->db->conn->real_escape_string($id);
$sql= "DELETE FROM `users` WHERE id= $id";

$result = $this->db->conn->query($sql);
if($result===TRUE){
    echo "user with id $id deleted successfully";
}
else{
    echo "the requested operation wasnt successfull";
}
}

}

