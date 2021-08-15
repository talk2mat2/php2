<?php
include './includes/header.php';
require_once './database.php';
?>
<?php
if(isset($_GET['submit'])){
    print($_GET['username']);
};
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
    //      session_start();
    //     //  $_SESSION['name']='martins';
    //     //  $_SESSION['age']=34;
    //    echo $_SESSION['name'];
    //    session_destroy();
       ?> -->

        <?php
include './includes/footer.php'
?>