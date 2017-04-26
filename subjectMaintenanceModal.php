<form method="POST">
<div id="AddSubject" class="modal fade" role="dialog">
	<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Subject Detail</h4>
				</div>
				<div class="modal-body" id = "Subject">
					
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

		</div>
	</div>
</form>
<?php
require('connection.php');
if(isset($_POST['btnAddSubject'])){
	$code =$_POST['code'];
	$desc= mysqli_real_escape_string($con,$_POST['desc']);
	$unit= $_POST['unit'];
	$res = mysqli_query($con,"Insert into tblsubject values ('$code', $unit,'$desc');");
	if(!$res){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		session_destroy();
		echo "<script>alert('Changes Saved')
		window.location= 'subjectMaintenance.php'</script>";
	}
	}
	if(isset($_POST['btnDeleteSubject'])){
	$name =$_POST['btnDeleteSubject'];
	$res = mysqli_query($con,"delete from tblsubject where strSubjectCode= '$name';");
	if(!$res){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')
		window.location= 'subjectMaintenance.php'</script>";
	}
	}
	if(isset($_POST['btnEditSubject'])){
	$name =$_POST['btnEditSubject'];
	$desc= mysqli_real_escape_string($con,$_POST['desc']);
	$unit= $_POST['unit'];
	$res = mysqli_query($con,"Update tblsubject set intUnit =  $unit, strSubjectDesc='$desc' where strSubjectCode= '$name';");
	if(!$res){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')
		window.location= 'subjectMaintenance.php'</script>";
	}
	}?>