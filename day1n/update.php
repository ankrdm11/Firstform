
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
    $langs = implode(",", $lang);
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



<html lang="en">

<head>
    <title>Forms</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="form.js"></script> 
</head>

<body>
    <div>
        <div class="container">
            <center>
                <h1><strong><u>Register here</u></strong> </h1>
                <form onsubmit="return validation()" name="myform" method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>User Name:</label><br>
                        <input type="text" placeholder="Enter First Name" value="<?php echo $User?>"class="form-control" id="user" name="User"><br>
                        <span id="usernameerror" class="text-danger font-weight-bold"></span><br><br>
                    </div>



                    <div class="form-group">
                    <div class="form-group">
                        <label>Name:</label><br>
                        <input type="text" placeholder="Enter Name " value="<?php echo $Rname?>"class="form-control" id="name" name="Rname"><br>
                        <span id="nameerror"></span><br><br>
                    </div>


                    <div class="form-group">
                        <label>Contact Number:</label><br>
                        <input type="number" placeholder="Enter Contact Number" value="<?php echo $Number?>"class="form-control" id="number" name="Number"><br>
                        <span id="numbererror"></span><br><br>
                    </div>


                    <div class="form-group">
                        <label>Email:</label><br>
                        <input type="text" placeholder="Enter Email" class="form-control" id="email"value="<?php echo $Email?>" name="Email"><br>
                        <span id="emailerror"></span><br><br>
                    </div>


                    <div class="form-group">
                        <label>Age:</label><br>
                        <input type="number" placeholder="Age" min="10" max="100" class="form-control" id="age" value="<?php echo $Age?>"name="Age"><br>
                        <span id="ageerror"></span><br><br>
                    </div>


                    <label>Known Language:</label><br><br>
                    <input type="checkbox" name="lang" value="hindi"<?php if(isset($Lang) && ($Lang=="hindi")) { echo 
                         "checked='checked'";}?> >
                    <label id="hindi">Hindi</label>
                    <input type="checkbox" name="lang" value="English"<?php if(isset($Lang) && ($Lang=="English")) { echo 
                         "checked='checked'";}?> >
                    <label id="English">English</label>
                    <input type="checkbox" name="lang" value="Urdu"<?php if(isset($Lang) && ($Lang=="Urdu")) { echo 
                         "checked='checked'";}?> >
                    <label id="Urdu">Urdu</label><br><br>


                    <div class="form-group">
                        <label>Gender:</label><br><br>
                        <input type="radio" value="male" name="gender" <?php if(isset($Gender) && ($Gender=="male")) { echo '
                         checked';}?> id="ge">Male
                        <input type="radio" value="female" name="gender"<?php if(isset($Gender) && ($Gender=="female")) { echo '
                         checked';}?> id="ge">Female
                        <input type="radio" value="other" name="gender"<?php if(isset($Gender) && ($Gender=="other")) { echo '
                         checked';}?>  id="ge">other<br><br>
                        <span id="geerror" class="sp"></span>
                    </div><br>


                     <div class="form-group">
                         <label>Image:</label><br>
                            <input type="file" id="imgs" name="Images" value=" " value="<?php echo $Images?>"class="form-control"><br>
                            <span id="ierror" class="sp"></span>
                        </div><br>




                    <input type="submit" value="submit" name="update">
                    <button type=""><a href="user-list.php">User Lists</a></button>

                </form>
            </center>
        </div>
    </div>
   
</body>

</html>