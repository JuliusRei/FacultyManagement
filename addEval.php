

<!-- Modal -->
<form method="POST">
<div id="AddEval" class="modal fade" role="dialog">
	<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Faculty Evaluation</h4>
				</div>
				<div class="modal-body" id = "Evaluation">
					
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

		</div>
	</div>
</form>
<?php
	$query = mysqli_query($con,"Select * from tblcurrentsem");
	$row1= mysqli_fetch_object($query);
	$sem = $row1->strSem;
	$yr = $row1->strYear;
	$EmpNo = $_SESSION['EmpNo'];
	if(isset($_POST['btnAddRecord'])){
	$Student = $_POST['addStudent'];
	$Peer = $_POST["addPeer"];
	$Self = $_POST["addSelf"];
	$Supervisor = $_POST["addSupervisor"];
	
	$a = mysqli_query($con,"Insert into tblfacultyEval values ($Student, $Peer, $Self, $Supervisor, '$sem', '$yr', '$EmpNo')");
	echo "<script>window.location='FacultyEval.php'</script>";
	}
	if(isset($_POST['btnEditRecord'])){
	$Student = $_POST['EditStudent'];
	$Peer = $_POST["EditPeer"];
	$Self = $_POST["EditSelf"];
	$Supervisor = $_POST["EditSupervisor"];
	
	$a = mysqli_query($con,"Update tblfacultyEval set intStudentEval = $Student, intPeerEval = $Peer, intSelfEval = $Self, intSupervisorEval = $Supervisor where forEmployeeNo = '$EmpNo' AND strSemester = '$sem' AND strYear = '$yr' ");
	echo "<script>window.location='FacultyEval.php'</script>";
	}?>