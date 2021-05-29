<?php
include "header.php";


?>
  <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Message</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Шуудан</button>
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Inbox(11)</a></li>
                                                <li><a href="#">Sent</a></li>
                                                <li><a href="#">Draft(2)</a></li>
                                                <li><a href="#">Trash</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Settings</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->
                                </div>
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Нэр
                                                </td>
                                                <td class="cell-title">
                                                    Сэтгэгдэл
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                    Өдөр
                                                </td>
                                            </tr>
                                            <?php 
                                            include "./php/config.php";
                                            $sql = mysqli_query($conn,"SELECT * FROM setgegdel");
                                            if(mysqli_num_rows($sql) >0){
                                                while($row = mysqli_fetch_assoc($sql)){
                                                    if($row['id'] %2 ==0){
                                                        echo ' <tr class="unread starred">
                                                                <td class="cell-check">
                                                                <input type="checkbox" class="inbox-checkbox">
                                                                </td>
                                                                <td class="cell-icon">
                                                                <i class="icon-star"></i>
                                                                </td>
                                                                <td class="cell-author hidden-phone hidden-tablet">
                                                            '.$row['UserId'].'
                                                        </td>
                                                        <td class="cell-title">
                                                            '.$row['setgegdel'].'
                                                        </td>
                                                        <td class="cell-icon hidden-phone hidden-tablet">
                                                            <i class="icon-paper-clip-no"></i>
                                                        </td>
                                                        <td class="cell-time align-right">'.$row['crdate'].'</td>
                                                    </tr>';
                                                    }else{
                                                        echo ' <tr class="unread">
                                                                <td class="cell-check">
                                                                <input type="checkbox" class="inbox-checkbox">
                                                                </td>
                                                                <td class="cell-icon">
                                                                <i class="icon-star"></i>
                                                                </td>
                                                                <td class="cell-author hidden-phone hidden-tablet">'.$row['UserId'].'</td>
                                                        <td class="cell-title">'.$row['setgegdel'].'</td>
                                                        <td class="cell-icon hidden-phone hidden-tablet">
                                                            <i class="icon-paper-clip-no"></i>
                                                        </td>
                                                        <td class="cell-time align-right">'.$row['crdate'].'</td>
                                                        </tr>'; 
                                                    }
                                                } 
                                            }else{ echo '<tr class="unread>
                                                        <td class="cell-check">Setgegdel alga baina</td>';

                                            }
                                            
                                            ?>
                                         
                                           
                                          
                                         
                                       
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <div class="module-foot">
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<?php 
include "footer.php"
?>