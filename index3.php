<?php
include './includes/header.php';
require_once './database.php';
?>
<?php
if(isset($_GET['submit'])){
    print($_GET['username']);
};
$email = "talk2mat@yahoo.com";

//validate a valid email
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
echo "valid email supplied";
}
else {
    echo "invalid email supplied";
}
//prepared statement example
 $stmt = mysqli_stmt_init($db->conn);
 $sql="SELECT * FROM USERS WHERE email= ? or password= ?;";
 mysqli_stmt_prepare($stmt,$sql);
 //ss stands for double string value  email and passto be replaced  by the prepared statement
mysqli_stmt_bind_param($stmt,"ss",$email,$password) ;
mysqli_stmt_execute($stmt);
$resultData= mysqli_stmt_get_result($stmt);
if($row= mysqli_fetch_assoc($resultData)){
    //returns true the user exist wih a singlw row associat array;
    return $row;
    //the password= 
    $passhashed= $row['passwor'];
    $user= $row['username'];
    $passwordverify=password_verify($password,$passhashed);
    //we use the row to log the user in
if($passwordverify==FALSE){
echo "wrong pass";
}
else{
    session_start();
    $_SESSION["userid"] =$row['userid'];
    $_SESSION["userName"] =$row['username'];
    //redirec the user to the homepage;
    header('location:/dashboard.php')
}
}
else{
    $result= false;
    return $result;
 
}
//to exit a page;  
exit();

//validate if user is loged in
if(isset($_SESSION['userid'])){
    echo "<p> hello ".$_SESSION['username']."/p>"
}
//password has from php--
//password_defaul  means we are ujsing the default hashing algorithm
$hashedPassword = password_hash($password,PASSWORD_DEFAULT );

function createUser($db,$name,$email,$username,$pwd){

    $sql= "INSERT INTO users (username,password,email,hashedoassword) VALUE ('?','?',---etc)";
//preparestatement and iser daa into database
// reditrect user to success page;
header("location:/signupsuccess.php?error=none")

}


?>





<?php
// $id= uniqid("",true);
// if(isset($_POST['submit'])){
//     // print_r($_POST);
//     $files=$_FILES['myimage'];
//     print_r($files);
//     move_uploaded_file("temp_name",'destination',)
// };

$FetchUsers= "SELECT * FROM users";

//everything is done manual in php bro
//check if the database can be queried and query it
// $result =mysqli_query($conn,$FetchUsers);
// print_r($result);
//fetch rows from database returns only single row
// $rowCount =mysqli_fetch_row($result);
// print_r($rowCount);
//loop throu the rows to spill out all rows and assoicate array 
// if($rowCount>0){
    //create a json array of object aka associae array
// while($row = mysqli_fetch_assoc($result)){
//     echo $row['username'].'<br/>';;
//     echo $row['password']. '<br/>';;
//     echo $row['email'].'<br/>';
// //    print_r($row);
// }
// }
// else{
//     echo 'no result found';
// }


?>
        <h3>
            hello body</h3>
          <form action='index3.php' method='POST' enctype='multipart/form-data' >
<!-- <input name='username' id='username'  type='text'/> -->
<input name='myimage' id='image'  type='file'/>
<button name='submit' type='submit'>submit</button>
          </form>
        
       <!-- <?php
         session_start();
        //  $_SESSION['name']='martins';
        //  $_SESSION['age']=34;
       echo $_SESSION['name'];

       //to log out or logout user
       session_destroy();
       ?> -->
<?php
function logoutUser(){
    session_start();
    session_unset();
    session_destroy();
    header("location:loginpage.php");
}

?>
        <?php
include './includes/footer.php'
?>