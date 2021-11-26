
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
                <form onsubmit="return validation()" name="myform" method="post" action="connect.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>User Name:</label><br>
                        <input type="text" placeholder="Enter First Name" class="form-control" id="user" name="User"><br>
                        <span id="usernameerror" class="text-danger font-weight-bold"></span><br><br>
                    </div>



                    <div class="form-group">
                    <div class="form-group">
                        <label>Name:</label><br>
                        <input type="text" placeholder="Enter Name " class="form-control" id="name" name="Rname"><br>
                        <span id="nameerror"></span><br><br>
                    </div>


                    <div class="form-group">
                        <label>Contact Number:</label><br>
                        <input type="number" placeholder="Enter Contact Number" class="form-control" id="number" name="Number"><br>
                        <span id="numbererror"></span><br><br>
                    </div>


                    <div class="form-group">
                        <label>Email:</label><br>
                        <input type="text" placeholder="Enter Email" class="form-control" id="email" name="Email"><br>
                        <span id="emailerror"></span><br><br>
                    </div>


                    <div class="form-group">
                        <label>Age:</label><br>
                        <input type="number" placeholder="Age" min="10" max="100" class="form-control" id="age" name="Age"><br>
                        <span id="ageerror"></span><br><br>
                    </div>


                    <label>Known Language:</label><br><br>
                    <input type="checkbox" name="lang[]" value="hindi" checked>
                    <label id="hindi">Hindi</label>
                    <input type="checkbox" name="lang[]" value="English">
                    <label id="English">English</label>
                    <input type="checkbox" name="lang[]" value="Urdu">
                    <label id="Urdu">Urdu</label><br><br>


                    <div class="form-group">
                        <label>Gender:</label><br><br>
                        <input type="radio" value="male" name="gender" id="ge">Male
                        <input type="radio" value="female" name="gender" id="ge">Female
                        <input type="radio" value="other" name="gender" id="ge">other<br><br>
                        <span id="geerror" class="sp"></span>
                    </div><br>


                     <div class="form-group">
                         <label>Image:</label><br>
                            <input type="file" id="imgs" name="Images" value=" " class="form-control"><br>
                            <span id="ierror" class="sp"></span>
                        </div><br>


                    <div class="form-group">
                        <label>Password:</label><br>
                        <input type="password" placeholder="Enter password" class="form-control" id="password" name="Password"><br><br>
                        <span id="passworderror"></span>
                    </div>


                    <div class="form-group">
                        <label>Confirm:</label><br>
                        <input type="password" placeholder="Confirm password" class="form-control" id="confirm" name="Confirm"><br><br>
                        <span id="confirmerror"></span>
                    </div>

                    <input type="submit" value="submit" name="submit">
                    <button type=""><a href="user-list.php">User Lists</a></button>

                </form>
            </center>
        </div>
    </div>
   
</body>

</html>