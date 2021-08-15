<?php
include './includes/header.php';
include './functions.php'
?>
        <h3>
            hello body<br/>
            <?php
          echo welcome(); 
          echo Hellobox(3,7)."<br/>";
          echo ceil(0.5),"<br/>";
          echo strlen("hello world");
          $name=array("name"=>"martins","age"=>23);
          print_r(array_keys($name));
          //echo $name;
          // array_push($name,"or")
          echo rand(2,20);
          echo '<br/>';
          $targeDays= mktime(0,0,0,02.17,1985);
          echo $targeDays;
          $stringers= "i am ok";
          echo $stringers[0]."hello";
          echo '<br/>';
          echo  time();
        
            ?>
        </h3>
        <?php
        
        if(isset($_POST)){
          // echo $_POST['name'];
          print_r($_POST);
        };
        ?>
        <form action='index.php' method='POST'>
<input type='text'/>
<buttun type='submit'> submit</button> </form>
<?php
class comeHere{
private $name;
public $age;

function __construct($name,$age){
  $this->name=$name;
  $this->age=$name;

}
function getName(){
  return $this->name ." <br/>". $this->age;
}
// function getAge(){
//   return $this->age;
// };


}; 

$newGetName= new comeHere("martins22",32);
// $newGetName->name;

// echo isset($users[0])?"valid":"no valid";

// 0 is considered empty and 1 is considered not empty
$fucking=20;
printf("this is so %u good",$fucking);

  
?>

        <?php
include './includes/footer.php'
?>