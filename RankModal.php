<form method="POST">
<div id="AddRank" class="modal fade" role="dialog">
	<div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Rank Detail</h4>
				</div>
				<div class="modal-body" id = "Rank">
					
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

		</div>
	</div>
</form>
<?php
require('connection.php');
if(isset($_POST['btnAddRank'])){
	$name =$_POST['Name'];
	$salary= $_POST['Salary'];
	$res = mysqli_query($con,"Insert into tblRank values ('$name', $salary);");
	if(!$res){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		session_destroy();
		echo "<script>alert('Changes Saved')
		window.location= 'rankMaintenance.php'</script>";
	}
	}
	if(isset($_POST['btnDeleteRank'])){
	$name =$_POST['btnDeleteRank'];
	$res = mysqli_query($con,"delete from tblRank where intRank= '$name';");
	if(!$res){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		session_destroy();
		echo "<script>alert('Changes Saved')
		window.location= 'rankMaintenance.php'</script>";
	}
	}
	if(isset($_POST['btnEditRank'])){
	$name =$_POST['btnEditRank'];
	$salary= $_POST['Salary'];
	$res = mysqli_query($con,"Update tblRank set decSalary =  $salary where intRank = '$name';");
	if(!$res){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		session_destroy();
		echo "<script>alert('Changes Saved')
		window.location= 'rankMaintenance.php'</script>";
	}
	}?>