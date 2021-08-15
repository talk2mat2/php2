<?php



// echo $users[0];
$ages= array("martins"=>30,"munachi"=>28,"anuri"=>22);
$users=array($ages,'dog','man');
echo '<br/>';
echo $ages['martins'];
echo '<br/>';
echo $users[0]['martins'];
$men= "men are scum";
$men .=" are you sure";

if($men==0){
echo "true";
};
2 <=>4;
$tv= 10;
// while($tv<=10){
// echo $tv ,"<br/>"; 
// ++$tv;}
//buil

function myFunction(){
    global $tv;
echo "tv is".$tv;
};
myFunction();
//change the initail value of tv variable
function changeTv(&$tv){
    return ++$tv;
echo "changed <br/>";
};
// session_start();
// echo $_SESSION['name'];
changeTv($tv);
echo "<br/>";
echo $tv;
//define is used to declare a constant
//constant arebimutable
define("USERS",array("martins","munachi"));

echo json_encode(USERS);
//control structure
//conditional statemtnt in php 
//spaceshift
//if the value on he left is greater than right 
//the system returns negative
//if its the same it returns positive
//if its less than it returns positiv 
print_r($_REQUEST); 
?>  