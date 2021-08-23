<script>

function saveTolocals(x){
alert(x);
}

</script>

<?php
include('./database.php');
include('./usersmodel.php');
$db = new Dbcontroller();
$users= new Users($db);

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['userid'])){
// print_r();
$users->deleteUser($_POST["userid"]);
    }
}

//initiate obect of the database class




$mail2= array(0,1,2,3,4,5,"ememe ","hello nigeria");
$mail= array($mail2,1,2,3,4,5);

// foreach($mail[0] as $mails){
//     echo trim($mails);
// };

// function mapme($x){
// echo $x;
// }

array_map(function ($x){echo $x ;},$mail2);


$usersarray=$users->getAllusers($tableName="users");

// print_r($usersarray);

?>
<?php foreach($usersarray as $users22){ ?>
<ul>
<li><?php echo $users22['email']?></li>
<li><?php echo $users22["username"]?> </li>
<form action=<?php echo $_SERVER["PHP_SELF"]?> method="POST">
<input name="userid" type="hidden" value=<?php echo $users22['id'] ?>>    
<button value=<?php echo $users22["id"]?> onclick="saveTolocals(this.value)" >delete</button>
</form>
</ul>
<?php }; ?>






