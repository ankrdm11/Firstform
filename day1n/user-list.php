<!DOCTYPE html>
<html >
<head>
    <title></title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="main-div">
        <h1>List of Registration</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table class="table table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>user</th>
                        <th>Rname</th>
                        <th>number</th>
                        <th>email</th>
                        <th>age</th>
                        <th>lang</th>
                        <th>gender</th>
                        <th>images</th>
                        <th colspan="2">operation</th><br>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
include ('connect1.php');


$sql = "select * from registration";
       $result = $conn->query($sql);
       if($result->num_rows > 0){
       while($res = $result->fetch_array()){
       
        $id =$res['id'];
        $user =$res['user'];
        $Rname =$res['Rname'];
        $number =$res['number'];
        $email =$res['email'];
        $age =$res['age'];
        $lang =$res['lang'];
        $gender =$res['gender'];
        $images =$res['images'];
    ?>
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['user']; ?></td>
                        <td><?php echo $res['Rname']; ?></td>
                        <td><?php echo $res['number']; ?></td>
                        <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                        <td><?php echo $res['age']; ?></td>
                        <td><?php echo $res['lang']; ?></td>
                        <td><?php echo $res['gender']; ?></td>
                        <td><img src="<?php echo $res['images'];?>" width="100" height="50">  </td> 
                       <!-- <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                        <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                         -->
                         <td><a href="update.php?id=<?php echo $res['id']; ?>">Edit</a></td>
                         <td><a href="Delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
                        
                    </tr>    
               
                    <?php
                      }
                    }
?>
                    
                    </tbody>
</table>
</div>
</div>
    </div>
</body>
</html>

