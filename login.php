<?php
$user1=$_POST['user'];
$pass1=$_POST['pass'];

echo "<h2>"."<center>";

$connect=new mysqli("localhost","root","","insta") or die("ERROR:could not connect to the database!!!");

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      
      $sql = "SELECT * FROM signup WHERE email = '$user1' and password = '$pass1'";
      $result = mysqli_query($connect,$sql);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {  
        $row = mysqli_fetch_array($result);
         $_SESSION['login_user'] = $user1;
         
         header("location: index.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo 'Your Login Name or Password is invalid';
         echo '<br>';
         echo '<br>';
         echo 'Pleace Try Again';
         echo "<a href='login.html'>"."<h4>Click Here</h4>"."</a>";
      }
   }

?>
