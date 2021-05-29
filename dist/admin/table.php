<?php
include "header.php";
include "./php/config.php";

?>

<div class="span9">
					<div class="content">

		

						<div class="module">
							<div class="module-head">
								<h3>Ажилчдын мэдээлэл</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Ажилчдын ID</th>
											<th>Нэр</th>
											<th>Дугаар</th>
											<th>Нууц</th>
											<th>Албан тушаал</th>
										</tr>
									</thead>
									<tbody>
									<?php
$sql = mysqli_query($conn,"SELECT * FROM ajilchid");
if(mysqli_num_rows($sql) >0){
	while($row = mysqli_fetch_assoc($sql)){
	 
	
?>
										<tr class="odd gradeX">
											<td> <?=$row['id'];?></td>
											<td> <?=$row['fname'];?></td>
											<td> <?=$row['rd'];?></td>
											<td class="center"> <?=md5($row['pass']);?></td>
											<td class="center"> <?=$row['albanTushaal'];?></td>
										</tr>
										<?php }}?>
										
								
									</tbody>
								
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<?php
include "footer.php";
?>