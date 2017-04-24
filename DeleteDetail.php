<?php
require('connection.php');
session_start();
$type= $_POST['type'];
$Id= $_POST['Id'];

if($type==1){
	$query = mysqli_query($con,"Select * from tblemailfaculty where strEmailAddress = '$Id' ");
	$row = mysqli_fetch_object($query);
	?>
	<div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12'>
		<h4>You are about to delete:</h4>
		<h5>Email:</h5>
		<input type = text class = 'form-control'  readonly value = '<?php echo $row->strEmailAddress?>'>
	</div>
	<div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12' style="padding-top:5%">
		<button type=submit class ='btn btn-danger btn-md' name='btnDeleteEmail'  onclick ="return confirm('Are you with your decision?')" value =<?php echo $Id ?>>Delete</button>
	</div>
	<?php
}
if($type==2){
	$query = mysqli_query($con,"Select * from tblcontactfaculty where strContactNo = '$Id' ");
	$row = mysqli_fetch_object($query);
	?>
	<div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12'>
		<h4>You are about to delete:</h4>
		<div class='form-inline row'>
			<div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6">
				<input type = text class = 'form-control'  readonly value = '<?php echo $row->strContactType?>'>
			</div>
			<div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6">
			<input type = text class = 'form-control'  readonly value = '<?php echo $row->strContactNo?>'></div>
			</div>
		</div>
	</div>
	<div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12' style="padding-top:5%">
		<button type=submit class ='btn btn-danger btn-md' name='btnDeleteContact'  onclick ="return confirm('Are you with your decision?')" value =<?php echo $Id ?>>Delete</button>
	</div>
	</div>
	<?php }
	if($type==3){
		$query = mysqli_query($con,"Select * from tbleducattainment where intID = '$Id' ");
		$row = mysqli_fetch_object($query);
	?>

		<h4>You are about to delete:</h4>
		<div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<h5>Degree Type</h5>
				<input type = text class = 'form-control'  readonly value = '<?php echo $row->strType?>'>
			</div>
			<div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<h5>Degree</h5>
			<input type = text class = 'form-control'  readonly value = '<?php echo $row->strDegree?>'></div>
			</div>
			<div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<h5>School</h5>
			<input type = text class = 'form-control'  readonly value = '<?php echo $row->strSchool?>'></div>
			</div>
			<div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<h5>Remarks</h5>
			<input type = text class = 'form-control'  readonly value = '<?php echo $row->strRemarks?>'></div>
			</div>
		

	<div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12' style="padding-top:5%">
		<button type=submit class ='btn btn-danger btn-md' name='btnDeleteDegree'  onclick ="return confirm('Are you with your decision?')" value =<?php echo $Id ?>>Delete</button>
	</div>
	
	<?php
	}
	if($type==4){
		$query = mysqli_query($con,"Select * from tblgeneralInfo where strEmployeeNo = '$Id' ");
		$row = mysqli_fetch_object($query);
		?>
		<h4>You are about to delete:</h4>
		<div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<h5>Name:</h5>
				<input type = text class = 'form-control'  readonly value = '<?php echo $_SESSION['Name']?>'>
			</div>
			<div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12">
			<h5>Department</h5>
			<input type = text class = 'form-control'  readonly value = '<?php echo $row->Department?>'></div>
			</div>
			<div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12' style="padding-top:5%">
		<button type=submit class ='btn btn-danger btn-md' name='btnDeletePerson'  onclick ="return confirm('Are you with your decision?')" value =<?php echo $Id ?>>Delete</button>
		</div>
		<?php
	}

?>