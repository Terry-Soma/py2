<?php
include "config.php";
session_start();
$tsag = mysqli_real_escape_string($conn,$_POST['time']);
$output="";

$sql=mysqli_query($conn,"SELECT u.*  FROM `uilchluulegch` u WHERE tsagAvsanUdur ='$tsag'");
if(mysqli_num_rows($sql)==10){
  echo "Энэ өдрийн цагууд дүүрсэн байна";
}else{
  $sql2 = mysqli_query($conn,"select * from tsag
                                where tsag.Id not in(
                                                select tsag.Id
                                                  from uilchluulegch,tsag 
                                                    WHERE  uilchluulegch.tsagId =(tsag.Id) AND uilchluulegch.tsagAvsanUdur='{$tsag}')");
  if(mysqli_num_rows($sql2) > 0){
    include "data.php";


}else{
  echo "aldaa garaad bhin";
}

 
 }
 echo $output;
?>
