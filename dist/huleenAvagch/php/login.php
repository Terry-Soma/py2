<?php 
    session_start();
    include_once "config.php";
    $utas = mysqli_real_escape_string($conn,$_POST['e']); 
    $password = mysqli_real_escape_string($conn,$_POST['p']); 
    // $passwprd = $_POST['p'];

    if(!empty($utas) && !empty($password)){
    $pass = md5($password);
     $sql= mysqli_query($conn,"SELECT * FROM ajilchid WHERE utas = '{$utas}' AND pass = '{$pass}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
                $_SESSION['Aunique_id'] = $row['uniqueId'];
                echo "success";
                
            

        }else{
            echo "Дугаар эсвэл нууц үг буруу байна";
        }




    }else{
        echo "Бүх талбаруудыг бөглөнө үү";
    }

?>