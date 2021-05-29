<?php 
    session_start();
    include_once "config.php";
    
    $fname = "test"; 
    $rd = "asfsad";
    $utas = 123123;
$abla ="emch";
    $password = '1234'; 
    if(!empty($fname) && !empty($rd)  && !empty($utas)  && !empty($abla)  && !empty($password))
    {
        $pass = md5($password);
           
                        $random_id = rand(time(),10000000);
                        $sql2 = mysqli_query($conn,"INSERT INTO ajilchid(fname,rd,utas,albanTushaal,pass,uniqueId)
                            VALUES('{$fname}', '{$rd}',{$utas} ,'{$abla}' ,'{$pass}','{$random_id}')");
                        
                        if($sql2){
                            // $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                            // if(mysqli_num_rows($sql3) >0){
                            //     $row = mysqli_fetch_assoc($sql3);
                            //     $_SESSION['unique_id']= $row['unique_id']; //using this session we used user unique_id int other php file
                            //     echo 'success';

                         
                            echo "scuc";
                      } else{
                          echo "error";
                      } 
                                
          


                }else{
                    echo "wrong";
                }
            
        
    
?>