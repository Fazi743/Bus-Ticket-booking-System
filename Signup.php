<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Signup_CSS.css">
 </head>
<body>
    <!-- PhP code -->
    <?php


    // Mysql Connection 
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "weblab";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con) {
       die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    //Table creation
    $sql = "CREATE TABLE Stud(
    student_Id INT NOT NULL AUTO_INCREMENT, 
    student_Name VARCHAR(100) NOT NULL, 
    student_Email VARCHAR(40) NOT NULL, 
    PRIMARY KEY ( student_Id ),
    phon  VARCHAR(40) NOT NULL,
    dob VARCHAR(40) NOT NULL,
    gen  VARCHAR(40) NOT NULL,
    cit VARCHAR(40) NOT NULL,
    pic  VARCHAR(40) NOT NULL,
    uname VARCHAR(40) NOT NULL, 
    pas VARCHAR(40) NOT NULL,
    cpas VARCHAR(40) NOT NULL)";	   
   
    if ($con->query($sql) === TRUE) {
      echo "Table created successfully";
    } 
    else {
     echo "Error creating table: " . $con->error;
    }
    //Data getting from table
    if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $birth = $_POST['birth'];
   $gender = $_POST['gender'];
   $city = $_POST['select'];
   $picture = $_POST['picture'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $conformpassword = $_POST['conformpassword'];
   
   if(isset($_POST['submit']))
   {
      $sql = "Select * from Stud where student_Email = '$email'";
      $result = $con->query($sql);
      if ($result->num_rows > 0){
       echo "Email already exists";
      }
      else{
      //Insert Values into table
       $sql = "INSERT INTO Stud(student_Name, student_Email, phon, dob, gen, cit, pic, uname, pas, cpas)
       VALUES ('$name','$email','$tel','$birth','$gender','$city','$picture','$username','$password','$conformpassword')";

        if($con->query($sql)=== true){
          echo "Value Inserted";
          header("Location: login.php");
        }
        else{
          echo "Error:"  .$sql . "<br>". $con->error;
        }
      }
    }
  }

  // include 'conection.php';
  // include 'createtable.php';
  // include 'insert.php';


  ?>


  <form  id="frm" method="POST">
    <div class="container">
      <div id="title">
        <h1>Sign Up Registerbtn Form</h1>
      </div>
      
       
      <label for="fullname" class="lbl" >Full Name</label>
      <input type="text" placeholder="Enter full name" name="name" id="name" class="etarea" required><br>
  
      <label for="email" class="lbl" >Email</label>
      <input type="email" placeholder="Enter email" name="email" id="email" class="etarea" ><br>

      <label for="Phone" class="lbl" >Phone</label>
      <input type="tel" placeholder="Enter Phone number" name="tel" id="tel" class="etarea" required><br>
      
      <label for="date" class="lbl" >Date of Birth</label>
      <input type="date" name="birth" id="dob" class="etarea" required><br>

      <br><label for="gender" class="lbl" >Gender</label>
      <input type="radio" class="radio" name="gender" id="male" >
      <label for="text" class="lb_r">Male</label>
      <input type="radio" class="radio" name="gender" id="female" >
      <label for="text" class="lb_r">Female</label><br>
     

      <label for="city" class="lbl" >City</label>
      <select class="etarea" name = "select" id="drp_city">
        <option selected >Attock</option>
        <option>Rawalpindi</option>
        <option>Lahore</option>
        <option>Karachi</option>
      </select><br>

      <label for="picture" class="lbl" >Upload Photo</label>
      <input type="file" name="picture" id="photo" class="etarea" required><br>

      <label for="user" class="lbl" >Username</label>
      <input type="text" placeholder="Enter Username" name="username" id="user" class="etarea" required><br>
  
      <label for="psw" class="lbl">Password</label>
      <input type="password" placeholder="Create Password" name="password" id="psw" class="etarea" required><br>  
  
      <label for="psw-repeat" class="lbl">Repeat Password</label>
      <input type="password" placeholder="Conform Password" name="conformpassword" id="psw-repeat" class="etarea" required><br><br>

      <input type="submit" name = "submit"  value="submit" class="registerbtn">
      <!-- <button type="submit" name = "submit" class="registerbtn">Register</button> -->
    </div>
  
    <div class="signin">
      <p>Already have an account? <a href="login.php">Login</a> </p>
    </div>
  </form>
 
  
</body>
</html>