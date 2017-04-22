<?php
session_start();
$val = $_POST['value'];

if($val == 1){
	?>
	<div class = "col-sm-12 col-xs 12 col-lg-12 col-md-12">
		<div class = "form-inline row">
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h4>Student</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "addStudent" required>
				</div>
			</div>
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h4>Peer</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "addPeer" required>
				</div>
			</div>
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<h4>Self</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "addSelf" required>
				</div>
			</div>
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h4>Supervisor</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "addSupervisor" required>
				</div>
			</div>
		</div>
		
	</div>
	<div class = " col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<button type="submit" class = "btn btn-success btn-sm" style = "float:right" name="btnAddRecord">Save Record</button>
				</div>
	<?php
}
if($val==2){
	require('connection.php');
	$query = mysqli_query($con,"Select * from tblcurrentsem");
	$row= mysqli_fetch_object($query);
	$sem = $row->strSem;
	$yr = $row->strYear;
	$EmpNo = $_SESSION['EmpNo'];
	$query = mysqli_query($con,"Select * from tblfacultyeval where strSemester = '$sem' AND strYear = '$yr' AND forEmployeeNo = '$EmpNo'");
	$row = mysqli_fetch_object($query);
?>
<div class = "col-sm-12 col-xs 12 col-lg-12 col-md-12">
		<div class = "form-inline row">
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h4>Student</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "EditStudent" value = '<?php echo $row->intStudentEval?>' required>
				</div>
			</div>
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h4>Peer</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "EditPeer" value = '<?php echo $row->intPeerEval?>' required>
				</div>
			</div>
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<h4>Self</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "EditSelf" value = '<?php echo $row->intSelfEval?>' required>
				</div>
			</div>
			<div class = "form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class = "col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h4>Supervisor</h4>
				</div>
				<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input type= "number" class = "form-control" name = "EditSupervisor" value = '<?php echo $row->intSupervisorEval?>' required>
				</div>
			</div>
		</div>
		
	</div>
	<div class = " col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<button type="submit" class = "btn btn-success btn-sm" style = "float:right" name="btnEditRecord">Save Record</button>
				</div>

<?php

}
?>