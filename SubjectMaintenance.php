<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	
	<form method=POST>	
		<section id="main-content">		

			<section class="wrapper">
			<?php require('subjectMaintenanceModal.php');?>
				<section class="panel">
					<header class="panel-heading" style = "padding-top:5px">
						Subject Maintenance
					</header>
					<div class=row>
						<div class="panel-body">
							<div class="form-inline" role="form">
								<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
									<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
										<thead>
											<tr>
												<th>Subject Code</th>
												<th>Description</th>
												<th>Unit</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sql="Select * from tblsubject";
											$query=mysqli_query($con,$sql);
											while($row3=mysqli_fetch_object($query)){?>
												<tr>
													<td><?php echo $row3->strSubjectCode; ?></td>
													<td><?php echo $row3->strSubjectDesc; ?></td>
													<td><?php echo $row3->intUnit; ?></td>

													<td><button type=button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#AddSubject"  onclick="DeleteSubject(2,'<?php echo $row3->strSubjectCode?>')">Delete</button>
														<button type=button class="btn btn-success btn-sm" data-toggle="modal" data-target="#AddSubject" onclick="EditSubject(3,'<?php echo $row3->strSubjectCode?>')">Edit</button></td>

													</tr>
													<?php } 
													?>
												</tbody>
											</table>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<button type="button" class='btn btn-info btn-md' style="float:right;" onclick="AddSubject(1,0)" data-toggle="modal" data-target="#AddSubject">Add New Record</button>
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
					function AddSubject(type,Id){
						$.ajax({
							type: "POST",
							url: "subjectDetail.php",
							data: 'type='+type+'&Id='+Id,
							success: function(data){
								$("#Subject").html(data);
							}
						});
					}
					function DeleteSubject(type,Id){
						$.ajax({
							type: "POST",
							url: "subjectDetail.php",
							data: 'type='+type+'&Id='+Id,
							success: function(data){
								$("#Subject").html(data);
							}
						});
					}
					function EditSubject(type,Id){
						$.ajax({
							type: "POST",
							url: "subjectDetail.php",
							data: 'type='+type+'&Id='+Id,
							success: function(data){
								$("#Subject").html(data);
							}
						});
					}
				</script>

			</body>
			</html>