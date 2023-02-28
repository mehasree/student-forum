<?php 
$server_name="localhost";
$username="root";
$password="";
$database_name="student register";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){die("connection failed".mysqli_connect_error());}
if(isset($_POST['Register'])){
$Email=$_POST['Email'];$pass=$_POST['Password'];
$Reg-no.:=$_POST['Reg-no.:'];
$sql_query="SELECT*FROM student registration WHERE Email='$Email' AND Password='$pass' AND Reg-no.:='$Reg-no.:'";
$result=mysqli_query($conn,$sql_query);
$link_address='student reg.html';
if(mysqli_num_rows($result)>0){echo $Email,"\r\n","Registered sucessfully","\r\n",'<a href="login.html">LOGIN</a>';}
 }?>
