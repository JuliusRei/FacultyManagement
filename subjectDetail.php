<?php
$type=$_POST['type'];
$Id = $_POST['Id'];
require('connection.php');
if($type==1){
	?>
	<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Subject Code:</h5>
			<input class="form-control" name="code" type="text" placeholder="Subject Code" />
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Description:</h5>
				<input class="form-control" name="desc"  placeholder="Description"  />
			</div> 
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Unit:</h5>
				<input class="form-control" name="unit" type="number" placeholder="Units"  />
			</div> 
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-info btn-md" name="btnAddSubject" onclick="return confirm('Do you want to save these changes?')"> Save Record</button>
		</div>

	<?php
}
if($type==2){
	$sql="Select * from tblsubject where strSubjectCode='$Id'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_object($query);
	?>
		<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Subject Code:</h5>
			<input class="form-control" name="code" type="text" placeholder="Subject Code"  readonly value="<?php echo $row->strSubjectCode?>"/>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Description:</h5>
				<input class="form-control" name="desc"  placeholder="Description"   readonly value="<?php echo $row->strSubjectDesc?>"/>
			</div> 
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Unit:</h5>
				<input class="form-control" name="unit" type="text" placeholder="Units" readonly   value= "<?php echo $row->intUnit ?>"/>
			</div> 
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-danger btn-md" name="btnDeleteSubject" onclick="return confirm('Do you want to save these changes?')" value ='<?php echo $row->strSubjectCode?>'> Delete Record</button>
		</div>
	<?php
}
if($type==3){
	$sql="Select * from tblsubject where strSubjectCode='$Id'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_object($query);
	?>
		<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Subject Code:</h5>
			<input class="form-control" name="code" type="text" placeholder="Subject Code" readonly value="<?php echo $row->strSubjectCode?>"/>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Description:</h5>
				<input class="form-control" name="desc"  placeholder="Description"   value="<?php echo $row->strSubjectDesc?>"/>
			</div> 
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Unit:</h5>
				<input class="form-control" name="unit" type="number" placeholder="Units"   value= "<?php echo $row->intUnit ?>"/>
			</div> 
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-info btn-md" name="btnEditSubject" onclick="return confirm('Do you want to save these changes?')" value ='<?php echo $row->strSubjectCode?>'> Save Record</button>
		</div>
	<?php
}
?>