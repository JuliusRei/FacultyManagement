<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	
	<form method=POST>	
		<section id="main-content">		

			<section class="wrapper">
			<?php require('RankModal.php');?>
				<section class="panel">
					<header class="panel-heading" style = "padding-top:5px">
						Rank Maintenance
					</header>
					<div class=row>
						<div class="panel-body">
							<div class="form-inline" role="form">
								<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
									<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
										<thead>
											<tr>
												<th>Rank</th>
												<th>Salary</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sql="Select * from tblRank";
											$query=mysqli_query($con,$sql);
											while($row3=mysqli_fetch_object($query)){?>
												<tr>
													<td><?php echo $row3->intRank; ?></td>
													<td><?php echo $row3->decSalary; ?></td>

													<td><button type=button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#AddRank"  onclick="DeleteRank(2,'<?php echo $row3->intRank?>')">Delete</button>
														<button type=button class="btn btn-success btn-sm" data-toggle="modal" data-target="#AddRank" onclick="EditRank(3,'<?php echo $row3->intRank?>')">Edit</button></td>

													</tr>
													<?php } 
													?>
												</tbody>
											</table>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<button type="button" class='btn btn-info btn-md' style="float:right;" onclick="AddRank(1,0)" data-toggle="modal" data-target="#AddRank">Add New Record</button>
										</div>


									</div>

								</div>
							</div>
						</section>
					</section>
				</section>
				<?php require("footer.php");?>
				<script>
					$(document).ready(function() {
						$('#dataTable').dataTable();		  
					});
					function AddRank(type,Id){
						$.ajax({
							type: "POST",
							url: "RankDetail.php",
							data: 'type='+type+'&Id='+Id,
							success: function(data){
								$("#Rank").html(data);
							}
						});
					}
					function DeleteRank(type,Id){
						$.ajax({
							type: "POST",
							url: "RankDetail.php",
							data: 'type='+type+'&Id='+Id,
							success: function(data){
								$("#Rank").html(data);
							}
						});
					}
					function EditRank(type,Id){
						$.ajax({
							type: "POST",
							url: "RankDetail.php",
							data: 'type='+type+'&Id='+Id,
							success: function(data){
								$("#Rank").html(data);
							}
						});
					}
				</script>

			</body>
			</html>