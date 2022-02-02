<?php
     $conn = mysqli_connect("localhost","root","","wworld");

     $email=$_POST["email"];
     $pass=$_POST["password"];
    
    if(!$conn)
        echo mysqli_connect_error();
    else{
        $qur="select * from hell";
        $res=mysqli_query($conn,$qur);
        if(!$res)
              echo "no table";
        else{
            if(mysqli_num_rows($res)>0){
                while($rw = mysqli_fetch_array($res)){
                    if($rw["email"]==$email && $rw["pass"]==$pass){
                        echo "<h1>welcome</h1>";
                    }
                }
            }else{
                echo "no table";
            }
        }
    }

