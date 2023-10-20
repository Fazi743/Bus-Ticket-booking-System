<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="login_CSS.css">
 </head>
<body>
<?php
 
    session_start();
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
    //  $sql = "CREATE TABLE Stud(
    //  student_Id INT NOT NULL AUTO_INCREMENT, 
    //  student_Name VARCHAR(100) NOT NULL, 
    //  student_Email VARCHAR(40) NOT NULL, 
    //  PRIMARY KEY ( student_Id ),
    //  phon  VARCHAR(40) NOT NULL,
    //  dob VARCHAR(40) NOT NULL,
    //  gen  VARCHAR(40) NOT NULL,
    //  cit VARCHAR(40) NOT NULL,
    //  pic  VARCHAR(40) NOT NULL,
    //  uname VARCHAR(40) NOT NULL, 
    //  pas VARCHAR(40) NOT NULL,
    //  cpas VARCHAR(40) NOT NULL)";	   
    
      // if ($con->query($sql) === TRUE) {
      //  echo "Table created successfully";
      // } 
      // else {
      // echo "Error creating table: " . $con->error;
      // }
    

      if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $pasword = $_POST['password'];

        // $SQL = "SELECT * FROM Stud";
        $SQL = "SELECT * FROM Stud WHERE student_Email = '$email' And pas = '$pasword'";

        $result=mysqli_query($con,$SQL);
        if ($result->num_rows > 0){
          echo "Login Successfully";
          while($row=mysqli_fetch_assoc($result))
          {
           //  echo $email;
            $name = $row['student_Name'];
   
            //echo $row['student_Email'];
            $_SESSION['name'] = $name;
          } 
          header("Location:project in using grid.php");
        }
        else{
          echo "Login Failed";
        }
      }
       
      
   ?>

   <div id="lo_bx" > 
      <h1>LOGIN</h1>
      <form id="form" method="POST">
      
      <input class="edt" name="email"  type="text"  required placeholder="Enter a email">
    
      <input class="edt" name="password" type="text" required placeholder="Enter a Password">


      <!-- <input class="edt" type="text" placeholder="Confrim Password"> -->

      <input type="submit" name ="submit" value="login" class="submit">


      <div class="signup">
        <p>If you don't have account? <a href="Signup.php">Register</a> </p>
      </div>
    
      </form>
  </div>
</body>
</html>