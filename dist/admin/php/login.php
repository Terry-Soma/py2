<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn,$_POST['e']); 
    $password = mysqli_real_escape_string($conn,$_POST['p']); 

    if(!empty($email) && !empty($password)){
    $pass = md5($password);
     $sql= mysqli_query($conn,"SELECT * FROM admin WHERE emailaddress = '{$email}' AND password = '{$pass}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
                $_SESSION['unique_id'] = $row['uniqueId'];
                echo "success";
                
            

        }else{
            echo "Email or password is incorrect";
        }




    }else{
        echo "all input fields are required";
    }

?>