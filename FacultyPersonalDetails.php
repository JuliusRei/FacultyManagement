<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	

	<section id="main-content">		
		<section class="wrapper ">	
			<div class="row ">
				<div class="col-lg-10 col-xs-10 col-md-12 col-sm-12">
					<section class="panel">
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
										<button type=button class= "btn btn-info btn-md"style="float:right">Edit Record</button>
										<button type=button name="btnAssign" class= "btn btn-success btn-md"style="float:right">Assign Subjects</button>
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



								</div>

							</div>
						</section>
						<section class="panel">
							<header class="panel-heading" style = "padding-top:5px">
								Contact Information
							</header>
							<div class="panel-body">
								<div class="form-inline" role="form">
									<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
										<h4>Address:</h4>
										<div class="form-group col-lg-5 col-md-5 col-xs-12 col-sm-12 padding-remove " >
											<input type=text class ="form-control" readonly value = '<?php echo $row->strBuildingNo." ".$row->strStreet." ".$row->strCity." ".$row->strProvince?>'>
										</div>

									</div>
									<div class="form-inline" role="form">
										<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<h4>Email Addresss:</h4>
											<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Email</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$sql="Select * from tblemailfaculty where forEmployeeNo = '$EmpNo'";
													$query=mysqli_query($con,$sql);
													while($row3=mysqli_fetch_object($query)){?>
														<tr>
															<td><?php echo $row3->strEmailAddress; ?></td>
											
														</tr>
														<?php } 
														?>
													</tbody>
												</table>
											</div>

											<div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12">
												<h4>Contact Number:</h4>
												<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable2"  border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Contact Type</th>
														<th>Contact Type</th>
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
														</tr>
														<?php } 
														?>
													</tbody>
												</table>
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
											<h4>Email Addresss:</h4>
											<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Type</th>
														<th>Degree</th>
														<th>School</th>
														<th>Year Graduated</th>
														<th>Remarks</th>
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
											
														</tr>
														<?php } 
														?>
													</tbody>
												</table>
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
				</script>

			</body>
			</html>