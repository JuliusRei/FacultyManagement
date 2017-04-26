<?php
$type=$_POST['type'];
$Id = $_POST['Id'];
require('connection.php');
if($type==1){
	?>
	<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Rank Name:</h5>
			<input class="form-control" name="Name" type="text" placeholder="Rank Name" />
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Salary:</h5>
				<input class="form-control" name="Salary" type="number" placeholder="Salary"  />
			</div> 
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-info btn-md" name="btnAddRank" onclick="return confirm('Do you want to save these changes?')"> Save Record</button>
		</div>

	<?php
}
if($type==2){
	$sql="Select * from tblRank where intRank='$Id'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_object($query);
	?>
	<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Rank Name:</h5>
			<input class="form-control" name="Name" type="text" placeholder="Rank Name" readonly value ='<?php echo $row->intRank?>'/>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Salary:</h5>
				<input class="form-control" name="Salary" type="number" placeholder="Salary" readonly value ='<?php echo $row->decSalary?>'/>
			</div> 
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-danger btn-md" name="btnDeleteRank" onclick="return confirm('Do you want to save these changes?')" value ='<?php echo $row->intRank?>'> Delete Record</button>
		</div>
	<?php
}
if($type==3){
	$sql="Select * from tblRank where intRank='$Id'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_object($query);
	?>
	<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Rank Name:</h5>
			<input class="form-control" name="Name" type="text" placeholder="Rank Name" readonly value ='<?php echo $row->intRank?>'/>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Salary:</h5>
				<input class="form-control" name="Salary" type="number" placeholder="Salary" required value ='<?php echo $row->decSalary?>'/>
			</div> 
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-info btn-md" name="btnEditRank" onclick="return confirm('Do you want to save these changes?')" value ='<?php echo $row->intRank?>'> Edit Record</button>
		</div>
	<?php
}
?>