<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	

	<section id="main-content">		
		<section class="wrapper ">	
			<div class="row ">
				<div class="col-lg-10 col-xs-10 col-md-12 col-sm-12">
					<section class="panel">
						<?php require('DetailEditModal.php'); ?>
						<header class="panel-heading" style = "padding-top:5px">
							<?php
							$EmpNo = $_SESSION['EmpNo'];

							$sql = "Select * from tblgeneralinfo where strEmployeeNo = '$EmpNo'";
							$query= mysqli_query($con,$sql);
							$row = mysqli_fetch_object($query);
							echo "<h3>".$row->strFirstName." ".$row->strFamilyName." ".$row->strNameExtension."</h3>";
							$_SESSION['Name'] = $row->strFirstName." ".$row->strFamilyName." ".$row->strNameExtension;
							$sql="Select * from tblRank where intRank = '".$row->intCurrentRank."'";
							$query = mysqli_query($con,$sql);
							$row2= mysqli_fetch_object($query);
							?>
						</header>
						<div class="panel-body">
							<div class="form-inline" role="form">
								<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
									<h4>Employee Number:</h4>
									<div class="form-group col-lg-2 col-md-2 col-xs-12 col-sm-12 padding-remove " >
										<input type=text class ="form-control" readonly value = <?php echo $EmpNo?>>

									</div>
									<div class="form-group col-lg-10 col-md-10 col-xs-12 col-sm-12 padding-remove " >
									<button type=button class= "btn btn-danger btn-md" style="float:right" data-toggle="modal" data-target="#EditDetail" onclick="Deletedetail(4,'<?php echo $EmpNo?>')">Delete Record</button>
										<button type=button class= "btn btn-info btn-md" style="float:right" data-toggle="modal" data-target="#EditDetail" onclick="EditDetail(1,'<?php echo $EmpNo?>')">Edit Record</button>
										<a type=button name="btnAssign" href = "FacultySubjects.php" class= "btn btn-success btn-md" style="float:right">Assign Subjects</a>
										<a  name="btnEvaluate" href="FacultyEval.php" class= "btn btn-warning btn-md"style="float:right">Evaluate</a>

									</div>
								</div>
								<div class="form-inline" role="form">
									<div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<h4>Date of Birth:</h4>
										<input type=text class ="form-control" readonly value = <?php $date=date_create($row->dtBirthday);
										echo date_format($date,"F-d-Y")?>>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<h4>Department:</h4>
										<input type=text class ="form-control" readonly value = <?php echo $row->Department?>>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<h4>Date of Entry:</h4>
										<input type=text class ="form-control" readonly value = <?php $date=date_create($row->dtDateofEntry);
										echo date_format($date,"F-d-Y")?>>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<h4>Present Rank:</h4>
										<input type=text class ="form-control" readonly value = <?php echo $row->intCurrentRank ?>>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<h4>Salary Grade:</h4>
										<input type=text class ="form-control" readonly value = <?php echo $row2->decSalary ?>>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<h4>Salary Grade:</h4>
										<input type=text class ="form-control" readonly value = <?php echo $row->strStatus ?>>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
										<h4>Address:</h4>
										<div class="form-group col-lg-5 col-md-5 col-xs-12 col-sm-12 padding-remove " >
											<input type=text class ="form-control" readonly value = '<?php echo $row->strBuildingNo." ".$row->strStreet." ".$row->strCity." ".$row->strProvince?>'>
										</div>

									</div>

								</div>

							</div>
						</section>
						<section class="panel">
							<header class="panel-heading" style = "padding-top:5px">
								Contact Information
							</header>
							<div class="panel-body">
								<div class="form-inline" role="form">

									<div class="form-inline" role="form">
										
										<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<h4>Email Addresss:</h4>
											<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Email</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$sql="Select * from tblemailfaculty where forEmployeeNo = '$EmpNo'";
													$query=mysqli_query($con,$sql);
													while($row3=mysqli_fetch_object($query)){?>
														<tr>
															<td><?php echo $row3->strEmailAddress; ?></td>
															<td>
																<button type=button  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#EditDetail" onclick="Deletedetail(1,'<?php echo $row3->strEmailAddress?>')">Delete</button></td>

															</tr>
															<?php } 
															?>
														</tbody>
													</table>
												</div>

												<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
													<h4>Contact Number:</h4>
													<table  class="table  table-striped table-bordered table-hover" align="center" id = "dataTable2"  border = '2' style = 'width:90%'>
														<thead>
															<tr>
																<th>Contact Type</th>
																<th>Contact Type</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$sql="Select * from tblcontactfaculty where forEmployeeNo = '$EmpNo'";
															$query=mysqli_query($con,$sql);
															while($row3=mysqli_fetch_object($query)){?>
																<tr>
																	<td><?php echo $row3->strContactType; ?></td>
																	<td><?php echo $row3->strContactNo; ?></td>
																	<td>
																		<button type=button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#EditDetail" onclick="Deletedetail(2,'<?php echo $row3->strContactNo?>')">Delete</button></td>
																	</tr>
																	<?php } 
																	?>
																</tbody>
															</table>
														</div>

														<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
															<button type="button" class='btn btn-info btn-md' style="float:right;" onclick="AddDetail(1)" data-toggle="modal" data-target="#EditDetail" >Add New Contact Info</button>
														</div>

													</div>

												</div>
											</section>

											<section class="panel">
												<header class="panel-heading" style = "padding-top:5px">
													Educational Attainment
												</header>
												<div class="panel-body">

													
													<div class="form-inline" role="form">
														<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
															<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable3"  border = '2' style = 'width:90%'>
																<thead>
																	<tr>
																		<th>Type</th>
																		<th>Degree</th>
																		<th>School</th>
																		<th>Year Graduated</th>
																		<th>Remarks</th>
																		<th>Action</th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																	$sql="Select * from tbleducattainment where forEmployeeNo = '$EmpNo'";
																	$query=mysqli_query($con,$sql);
																	while($row3=mysqli_fetch_object($query)){?>
																		<tr>
																			<td><?php echo $row3->strType; ?></td>
																			<td><?php echo $row3->strDegree; ?></td>
																			<td><?php echo $row3->strSchool; ?></td>
																			<td><?php echo $row3->strYearGraduated; ?></td>
																			<td><?php echo $row3->strRemarks; ?></td>
																			<td><button type=button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#EditDetail"  onclick="Deletedetail(3,'<?php echo $row3->intID?>')">Delete</button>
																				<button type=button class="btn btn-success btn-sm" data-toggle="modal" data-target="#EditDetail" onclick="EditDetail(2,'<?php echo $row3->intID?>')">Edit</button></td>

																			</tr>
																			<?php } 
																			?>
																		</tbody>
																	</table>
																</div>

																<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
																	<button type="button" class='btn btn-info btn-md' style="float:right;" onclick="AddDetail(2)" data-toggle="modal" data-target="#EditDetail">Add New Record</button>
																</div>


															</div>

														</div>
													</section>
												</div>
											</div>
										</section>
									</section>

									<?php require("footer.php");?>

									<script>
										$(document).ready(function() {
											$('#dataTable').dataTable();		  
										});
										$(document).ready(function() {
											$('#dataTable2').dataTable();		  
										});
										$(document).ready(function() {
											$('#dataTable3').dataTable();		  
										});	
										function Deletedetail(type,Id){
											$.ajax({
												type: "POST",
												url: "DeleteDetail.php",
												data: 'type='+type+'&Id='+Id,
												success: function(data){
									      		//alert(data);
									      		$("#Data").html(data);
									      	}
									      });
										}	
										function AddDetail(type){
											$.ajax({
												type: "POST",
												url: "AddDetail.php",
												data: 'type='+type,
												success: function(data){
									      		//alert(data);
									      		$("#Data").html(data);
									      	}
									      });
										}
										function EditDetail(type,Id){
											$.ajax({
												type: "POST",
												url: "EditDetail.php",
												data: 'type='+type+'&Id='+Id,
												success: function(data){
									      		//alert(data);
									      		$("#Data").html(data);
									      	}
									      });
										}
										var countEmail = 0;
										function addEmail(){
											countEmail=countEmail+1;

											$('#container').append('<div class = "row form-inline"><div class="col-xs-12 col-sm-12 col-lg-2 col-md-2 form-group"> <h5>Email #'+countEmail+'</h5></div><div class="col-xs-12 col-sm-12 col-lg-10 col-md-10 form-group"> <input class="form-control" id="Email_' + countEmail + '" name="Email[]' + '" type="text" /></div></div>' );  
										}
										var countContact = 0;
										function addContact(){
											countContact=countContact+1;
											$('#contact').append('<div class = "row form-inline" ><div class="col-xs-12 col-sm-12 col-lg-2 col-md-2"><h5>Contact No. #'+countContact+'</h5></div><div class="form-group col-xs-12 col-sm-12 col-lg-5 col-md-5"> <input class="form-control" id="ContactType_' + countContact + '" name="ContactType[]' + '" type="text" placeholder="Contact type" /></div> <div class="form-group col-xs-12 col-sm-12 col-lg-5 col-md-5"><input class="form-control" id="Contact_' + countContact + '" name="ContactNumber[]' + '" type="text" placeholder= "Contact Number"/></div></div>' );  
										}
										var countOtherDegree = 0;
										function addDegree(){
												countOtherDegree=countOtherDegree+1;
												$('#otherDegree').append('<div class="form-inline row"><div class="col-xs-12 col-sm-12 col-lg-12 col-md-12"><h5><select class="form-control" name="DegreeType[]" ><option>Bachelors</option><option>Masters</option><option>Doctors</option><option>Other Degree</option></select></h5></div><div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> <input class="form-control" id="DegreeName_' + countOtherDegree + '" name="DegreeName[]' + '" type="text" placeholder="CourseName" /></div> <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"><input class="form-control" id="School_' + countOtherDegree + '" name="School[]' + '" type="text" placeholder= "School"/></div><div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"><input class="form-control" id="Year_' + countOtherDegree + '" name="Year[]' + '" type="text" placeholder= "Year Graduated"/></div> <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"><input class="form-control" id="Remarks_' + countOtherDegree + '" name="Remarks[]' + '" type="text" placeholder= "Remarks"/></div></div><hr style="background-color:black"></hr>' );  
										}
									</script>

								</body>
								</html>