
<?php
include 'connect1.php';

$id =$_GET['id'];


$sql = "SELECT * FROM registration WHERE id='$id'";
       $result = $conn->query($sql);
       while($res = $result->fetch_array()){

$User =$res['user'];
$Rname =$res['Rname'];
$Number =$res['number'];
$Email =$res['email'];
$Age =$res['age'];
$Lang =$res['lang'];
$Gender =$res['gender'];  
$Images =$res['images'];     


$error = 0;  

   if(isset($_POST['update'])){
    $User =$_POST['User'];
    $Rname =$_POST['Rname'];
    $Number =$_POST['Number'];
    $Email =$_POST['Email'];
    $Age =$_POST['Age'];
    $Lang =$_POST['lang'];
    $langs = implode(",", $Lang);
    $Gender =$_POST['gender'];   
    $Images =$_FILES['Images'];            


$sql = "UPDATE registration SET  user='$User', Rname='$Rname',number='$Number',email='$Email',age='$Age',
  lang='$Lang',gender='$Gender',images='$Images'  WHERE id='$id'";

  if($conn->query($sql) === TRUE){
      header("location:user-list.php");
  }else{
      echo "Error updating record: ". $conn->error;
      }

       }
   

     }

?>
