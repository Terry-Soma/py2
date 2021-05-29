<?php 
    session_start();
    include_once "config.php";
    $userName = mysqli_real_escape_string($conn,$_POST['name']); 
    $setgegdel = mysqli_real_escape_string($conn,$_POST['comment']); 
    if(!empty($userName) && !empty($setgegdel))
    {
                        $sql = mysqli_query($conn,"INSERT INTO setgegdel(UserId,setgegdel)
                            VALUES('{$userName}', '{$setgegdel}')");
                        
                        if($sql){
                                echo 'success';
                      } else{
                          echo "Хүсэлт амжилтгүй боллоо";
                      } 
                                
          


                }else{
                    echo "Бүх талбаруудыг бөглөх ёстой";
                }
      
    
?>
