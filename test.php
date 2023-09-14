<?php

 include 'connect.php';

 $user =$_POST['name'];
 $password =$_POST['password'];

 $query = "INSERT INTO userdata(name,password)
                       VALUES('$user' , '$password')";

    $run = mysqli_query($con,$query);
    if(!$run){
        echo 'submission failed';
    }
    else

    {
        echo 'submission ok';
    }

?>