<?php
include ('connect1.php');

if(isset($_POST['submit'])){
    // print_r($_POST);
$User =$_POST['User'];
$Rname =$_POST['Rname'];
$Number =$_POST['Number'];
$Email =$_POST['Email'];
$Age =$_POST['Age'];
$Lang =$_POST['lang'];
$langs = implode(",", $Lang);
$Gender =$_POST['gender'];   
$Images =$_FILES['Images'];             
$Password =md5($_POST['Password']);
$Confirm =md5($_POST['Confirm']);
//print_r($Images);
$filename = basename($_FILES['Images']['name']);
//echo $filename;
$filepath = 'img/'.$filename;
$fileerror = $Images['error'];
$tmpname = $Images['tmp_name'];
 //echo $filepath;
if($fileerror == 0){
      
//    $destfile = 'img/'.$filename;
    //echo "$destfile";

   if( move_uploaded_file($tmpname, $filepath)){
    //echo "hello";
   } 
   
    


$sql = "INSERT INTO registration(user,Rname,number,email,age,lang,gender,images,password,confirm)
VALUES ('$User','$Rname','$Number','$Email','$Age','$langs','$Gender','".$filepath."','$Password','$Confirm')";

if($conn->query($sql) == TRUE) {
    echo "Registered Successfully Please Login!";
}else{

    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();

?> 