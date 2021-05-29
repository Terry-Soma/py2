<?php 
$i=1;
  while($row = mysqli_fetch_assoc($sql2)){
    if($i===1){
        $output.='<div class="row text-center mx-0">
        <div class="col-md-2 col-4 my-1 px-2">
        <div id="but" name="'.$row['Id'].'" class="cell py-1" onclick="cl()">'.$row['tsag'].'</div>
        </div>';
    }elseif ($i%6==1 && $i!==1) {
        $output.='</div>
        <div class="row text-center mx-0">
        <div class="col-md-2 col-4 my-1 px-2">
        <div  class="cell py-1" onclick="cl()">'.$row['tsag'].'</div>
        </div>';
        # code...
    }else{
        $output.='<div class="col-md-2 col-4 my-1 px-2">
        <div id="but" class="cell py-1" onclick="cl()">'.$row['tsag'].'</div>
        </div>';
    }
   

     $i++;
}

?>
