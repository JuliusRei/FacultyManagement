

<!-- Modal -->
<form method="POST">
<div id="subjModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Subject Assigned</h4>
				</div>
				<div class="modal-body" id = "Desc">
					
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

		</div>
	</div>
</form>
<?php

	require('connection.php');
	if(isset($_POST['btnEdit'])){
	$EmpNo = $_SESSION['EmpNo'];
	$room= $_POST['Room'];
	$code = $_POST['btnEdit'];
	$section = $_POST['Section'];
	$sched = $_POST['Schedule'];
	$sem = $_POST['Semester'];
	$yr = $_POST['Year'];
	$prevSection= $_POST['prevSection'];
	$result = mysqli_query($con,"Update tblFacultySubjects set strRoom= '$room', strSchedule = '$sched', strYearandSection = '$section' where forEmployeeNo = '$EmpNo' AND forSubjectCode = '$code' AND strSemester = '$sem' and strYear = '$yr' and strYearandSection = '$prevSection'");
	if(!$result){
		echo "<script>alert('Error, either that year and section is already in use or there is a problem with the database')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')</script>";
	}
}
	require('connection.php');
	if(isset($_POST['btnDelete'])){
	$EmpNo = $_SESSION['EmpNo'];
	$code = $_POST['btnDelete'];
	$sem = $_POST['Semester'];
	$yr = $_POST['Year'];
	$prevSection= $_POST['prevSection'];
	$result = mysqli_query($con,"delete from tblfacultysubjects where forEmployeeNo = '$EmpNo' AND forSubjectCode = '$code' AND strSemester = '$sem' and strYear = '$yr' and strYearandSection = '$prevSection'");
	if(!$result){
		echo "<script>alert('Error, either that year and section is already in use or there is a problem with the database')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')</script>";
	}
}
?>