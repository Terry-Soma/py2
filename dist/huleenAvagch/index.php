<?php
include "header.php";
include "../admin/php/config.php";
?>
<div class="span9">
    <div class="content">
        <div class="btn-controls">
           <!--  <div class="btn-box-row row-fluid">
                <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>
                
                
                </b>
                    <p class="text-muted">Өмнөх сартай харьцуулах</p>
                </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>
                       </b>
                    <p class="text-muted">
                        Шинэ үйлчлүүлэгч</p>
                </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>
                
                </b>
                    <p class="text-muted">
                        Орлого энэ сард</p>
                </a>
            </div> -->
           
        </div>
  
        
        <div class="module">
            <div class="module-head">
                <h3>
                    Цаг авсан хүмүүс</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                    width="100%">
                    <thead>
                        <tr>
                            <th>
                                Регистерийн дугаар
                            </th>
                            <th>
                                Нэр
                            </th>
                            <th>
                                Дугаар
                            </th>
                            <th>
                                Цаг авсан
                            </th>
                            <th>
                                Үйлчилгээ
                            </th>
                            <th>
                               Тодорхой
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

     $sql = mysqli_query($conn,"SELECT u.rd, u.ner,u.utas,u.tsagAvsanUdur,t.tsag, s.emchilgee,u.Id FROM uilchluulegch as u, tsag as t , uilchilgee as s
                                 WHERE t.Id = u.tsagId AND s.Id = u.uilchilgeeId");
     if(mysqli_num_rows($sql) >0){
         while($row = mysqli_fetch_assoc($sql)){
          
     
?>
                        <tr class="gradeA">
                            <td>
                                <?=$row['rd'];?>
                            </td>
                            <td>
                            <?=$row['ner'];?>
                            </td>
                            <td>
                            <?=$row['utas'];?>
                            </td>
                            <td class="center">
                            <?=$row['tsagAvsanUdur']. ' ' .$row['tsag'];?>
                            </td>
                            <td class="center">
                            <?=$row['emchilgee'];?>
                            </td>
                            </td>
                            <td class="center">
                            <a href="form.php?id=<?=$row['Id'];?>">
                            <button class="btn btn-primary">Ирсэн</button>                            
                            </a>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>

                       
                      
                    </tbody>
                    <tfoot>
                        <!-- <tr>
                            <th>
                                Rendering engine
                            </th>
                            <th>
                                Browser
                            </th>
                            <th>
                                Platform(s)
                            </th>
                            <th>
                                Engine version
                            </th>
                            <th>
                                CSS grade
                            </th>
                            <th>
                                CSS grade
                            </th>
                        </tr> -->
                    </tfoot>
                </table>
            </div>
        </div>
        <!--/.module-->
    </div>
    <!--/.content-->
</div>
<!--/.span9-->
</div>
</div>
<!--/.container-->
</div>
<?php
include "footer.php";
?>