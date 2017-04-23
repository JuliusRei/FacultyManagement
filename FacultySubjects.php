<?php require("header.php");?>
<body >
	<?php require("navigator.php");
	require('addSubjectModal.php');?>	
	<section id="main-content">		
		<section class="wrapper ">	
			<div class="row ">
				<div class="col-lg-10 col-xs-10 col-md-12 col-sm-12">
					<section class="panel">
						<header class="panel-heading" style = "padding-top:5px">
						<?php  	
								$query = mysqli_query($con,"Select * from tblcurrentsem");
								$row1= mysqli_fetch_object($query);
								$sem = $row1->strSem;
								$yr = $row1->strYear;
								$EmpNo = $_SESSION['EmpNo'];
								echo $_SESSION['Name'];
								?> - Assigned Subjects	- S.Y. <?php echo $yr?>

						</header>
						<div class="panel-body">
						<h3>First Semester Subjects</h3>
						<table  class="table table-striped table-bordered table-hover" align="center"   border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Subject Code</th>
														<th>Description</th>
														<th>Units</th>
														<th>Section</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<?php
												
												$query = mysqli_query($con,"Select strSubjectCode,strYearandSection,intUnit,strSubjectDesc from tblFacultySubjects as a inner join tblsubject as b on a.forSubjectCode = b.strSubjectCode  where strYear = '$yr' AND strSemester = '1st' AND  forEmployeeNo = '$EmpNo'");
												$queryCount = mysqli_num_rows($query);
												if($queryCount>0){
												while($row = mysqli_fetch_object($query)){?>
												<tr>
												<td><?php echo $row->strSubjectCode;?></td>
												<td><?php echo $row->strSubjectDesc;?></td>
												<td><?php echo $row->intUnit;?></td>
												<td><?php echo $row->strYearandSection;?></td>
												<td><button type = button class="btn-xs btn btn-danger">Delete</button>
													<button type = button onclick = "Edit('1st',<?php echo "'".$yr."','".$row->strSubjectCode."','".$EmpNo."'";?>)" class="btn-xs btn btn-success">Edit</button></td>
												
												</tr>
												<?php
													}
												}
												?>
													
													</tbody>
												</table>
												<h3>Second Semester Subjects</h3>
												<table  class="table table-striped table-bordered table-hover" align="center" "  border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Subject Code</th>
														<th>Description</th>
														<th>Units</th>
														<th>Section</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<?php
												
												$query = mysqli_query($con,"Select strSubjectCode,strYearandSection,intUnit,strSubjectDesc from tblFacultySubjects as a inner join tblsubject as b on a.forSubjectCode = b.strSubjectCode  where strYear = '$yr' AND strSemester = '2nd' AND  forEmployeeNo = '$EmpNo'");
												$queryCount = mysqli_num_rows($query);
												if($queryCount>0){
												while($row = mysqli_fetch_object($query)){?>
												<tr>
												<td><?php echo $row->strSubjectCode;?></td>
												<td><?php echo $row->strSubjectDesc;?></td>
												<td><?php echo $row->intUnit;?></td>
												<td><?php echo $row->strYearandSection;?></td>
												<td><button type = button class="btn-xs btn btn-danger">Delete</button>
													<button type = button class="btn-xs btn btn-success">Edit</button></td>
												</tr>
												<?php
													}
												}
												?>
													
													</tbody>
												</table>
												<h3>Summer Semester Subjects</h3>
												<table  class="table table-striped table-bordered table-hover" align="center" "  border = '2' style = 'width:90%'>
												<thead>
													<tr>
														<th>Subject Code</th>
														<th>Description</th>
														<th>Units</th>
														<th>Section</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<?php
												
												$query = mysqli_query($con,"Select strSubjectCode,strYearandSection,intUnit,strSubjectDesc from tblFacultySubjects as a inner join tblsubject as b on a.forSubjectCode = b.strSubjectCode  where strYear = '$yr' AND strSemester = 'Summer' AND  forEmployeeNo = '$EmpNo'");
												$queryCount = mysqli_num_rows($query);
												if($queryCount>0){
												while($row = mysqli_fetch_object($query)){?>
												<tr>
												<td><?php echo $row->strSubjectCode;?></td>
												<td><?php echo $row->strSubjectDesc;?></td>
												<td><?php echo $row->intUnit;?></td>
												<td><?php echo $row->strYearandSection;?></td>
												<td><button type = button class="btn-xs btn btn-danger">Delete</button>
													<button type = button class="btn-xs btn btn-success">Edit</button></td>
												</tr>
												<?php
													}
												}
												?>
													
													</tbody>
												</table>
												<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
												<button type =button class="btn btn-md btn-info" data-toggle="modal" data-target="#addSubject">Add Subjects</button>
												</div>
								</div>
								</section>
							</div>
						</div>
					</section>
				</section>

				<?php require("footer.php");?>

	<script>

				$('#selectize_1').selectize({
					allowEmptyOption: false
					
				});
				$('#selectize_2').selectize({
					allowEmptyOption: false
					
				});
				$('#selectize_3').selectize({
					allowEmptyOption: false
					
				});
				$('#selectize_4').selectize({
					allowEmptyOption: false
					
				});
				$('#selectize_5').selectize({
					allowEmptyOption: false
					
				});

				function Edit(sem,year,subjCode,EmpNo){
					$.ajax({
					type: "POST",
		      		url: "EditSubject.php",
		      		data: 'sem='+sem+'&year='+year+'&subjCode='+subjCode+'&EmpNo='+EmpNo,
					success: function(data){
		      		//alert(data);
		      		$("#Description").html(data);
		      		}
		      		});
		      		}
				

				
				</script>

			</body>
			</html>