<?php 

 $conn = mysqli_connect("localhost","root","","wworld");
 $name=$_POST["name"];
 $email=$_POST["email"];
 $pass=$_POST["password"];

 if(!$conn){
     echo mysqli_connect_error();
 }
 else{
     $qur="insert into hell values ('".$name."','".$email."','".$pass."')";

     $res = mysqli_query($conn,$qur);

     if(!$res){
         echo "table not available";
     }
     else{
         echo "1 row inserted";
         header("index.html");
     }

 }

 ?>
