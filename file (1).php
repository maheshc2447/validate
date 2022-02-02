<?php
    $conn = mysqli_connect("localhost","root","","cred");
    
    $uid = $_POST["uid"];
    $pass = $_POST["pass"];

    if(!$conn)
        echo mysqli_connect_error();
    else{

        $qur = "select * from user";

        $res = mysqli_query($conn,$qur);
        if(!$res)
            echo "No table exist";
        else{
            if(mysqli_num_rows($res)>0){
                while($rw = mysqli_fetch_array($res)){
                    if($uid == $rw["uid"] && $pass == $rw["pass"]){
                        setcookie("uid",$uid,time()+10);
                        echo $_COOKIE["uid"];
                    }
                }
            }else{
                echo "No data exist in table";
            }
        }
    }
?>