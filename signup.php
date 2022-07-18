<?php
$email1=$_POST['email'];
$first1=$_POST['first'];
$secound1=$_POST['secound'];
$pass1=$_POST['pass'];

echo "<h2>"."<center>";

$connect=new mysqli("localhost","root","","insta") or die("ERROR:could not connect to the database!!!");

$query1=$connect->query("INSERT INTO signup(email,first,secound,password) VALUES('$email1','$first1','$secound1','$pass1')");

$val = mysql_query('select 1 from `table_name` LIMIT 1');

if($val !== FALSE){
	echo "<br>"."TABLE Available";
}else{
	echo "<br>"."TABLE not Available";
}


if($query1)
{
	echo "<br>"."Account Created";
        /*sleep(3);
        header("location: login.html");*/
}
else
{
	echo "<br>"."Account not Created";
        
}
echo "</h2>"."</center>";

?>