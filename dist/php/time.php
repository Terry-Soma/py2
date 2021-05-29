<?php 
    include_once "config.php";
    $rd = mysqli_real_escape_string($conn,$_POST['rd']); 
    $name = mysqli_real_escape_string($conn,$_POST['name']); 
    $phone = mysqli_real_escape_string($conn,$_POST['phone']); 
    $serve = mysqli_real_escape_string($conn,$_POST['serve']); 
    $date = mysqli_real_escape_string($conn,$_POST['date']); 
    $time = mysqli_real_escape_string($conn,$_POST['tsag']); 


    if(!empty($rd) && !empty($name) && !empty($phone) && !empty($serve) && !empty($date) && !empty($time))
    {
        $sql=mysqli_query($conn,"SELECT * FROM tsag WHERE tsag='{$time}'");

        $tsag="";
        if(mysqli_num_rows($sql)>0){
            $row=mysqli_fetch_assoc($sql);
            $tsag = $row['Id'];
            }else{
                
            }
         $sql2 = mysqli_query($conn,"INSERT INTO uilchluulegch(rd,ner,utas,uilchilgeeId,tsagAvsanUdur,tsagId) VALUES('{$rd}', '{$name}','$phone','$serve','$date','$tsag')");
                        
                        if($sql2){
                                    echo 'success';
                          } else{
                                  echo $rd."  " . $name."  " .$phone.".". $serve ." " .$date."  ".$tsag;
                              } 
            

          


                }else{
                    echo "Бүх талбаруудыг бөглөх ёстой";
                }
      
    
?>
