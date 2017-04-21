<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	
		<?php require("footer.php");?>
		<section id="main-content">		
		<section class="wrapper ">	
			<div class="row ">
				<div class="col-lg-10 col-xs-10 col-md-12 col-sm-12">
					<section class="panel">
						<?php
						$EmpNo = $_SESSION['EmpNo'];
						$query = mysqli_query($con,"Select * from tblcurrentsem");
						$row1= mysqli_fetch_object($query);
						$sem = $row1->strSem;
						$yr = $row1->strYear;
						$sql= "Select * from tblfacultyeval where forEmployeeNo = '$EmpNo' AND strSemester = '$sem' AND strYear = '$yr'";
						$query= mysqli_query($con,$sql);
						$flag = mysqli_num_rows($query);
						if($flag>0){
							$row=mysqli_fetch_object($query);
						}
						?>
						<header class="panel-heading" style = "padding-top:5px">
						<?php echo $_SESSION['Name']?> - Faculty Evaluation
						</header>
						<div class="panel-body">
						<table class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
						<thead>
						<tr>
						<th>Description</th>
						<th>Score</th>
						</tr>
						</thead>
						<tbody>
							<tr>
							<td>Student</td>
							<td><?php if($flag>0){echo $row->intStudentEval;}
									  else{echo "-";}?></td>
							</tr>
							<tr>
							<td>Peer</td>
							<td><?php if($flag>0){echo $row->intPeerEval;}
									  else{echo "-";}?></td>
							</tr>
							<tr>
							<td>Self</td>
							<td><?php if($flag>0){echo $row->intSelfEval;}
									  else{echo "-";}?></td>
							</tr>
							<tr>
							<td>Supervisor</td>
							<td><?php if($flag>0){echo $row->intSupervisorEval;}
									  else{echo "-";}?></td>
							</tr>
														<tr>
							<td>Overall Evaluation</td>
							<td><?php if($flag>0){echo ($row->intSupervisorEval+$row->intSelfEval+$row->intPeerEval+$row->intStudentEval)/4;}
									  else{echo "-";}?></td>
							</tr>


						</tbody>
						</table>
						<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12">
						<button class = "btn btn-info btn md" <?php if($flag>0){echo "disabled";}?>>Add Evaluation</button>
						<button class = "btn btn-success btn md" <?php if($flag==0){echo "disabled";}?>>Edit Evaluation</button>
						</div>
						</div>

					</section>
				</div>
			</div>
		</section>
	<script>
		$(document).ready(function() {
			$('#dataTable').dataTable();		  
		});
	</script>
	
</body>
</html>