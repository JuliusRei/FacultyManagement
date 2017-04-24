<?php
require('connection.php');
$type=$_POST['type'];
$Id=$_POST['Id'];

if($type==1){
	$query=mysqli_query($con,"Select * from tblgeneralinfo where strEmployeeNo='$Id'");
	$row=mysqli_fetch_object($query);
	?>
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
		<div class = "form-inline row">
			<div class="col-lg-12">
				<h4>Full Name:</h4>
			</div>
			<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3" style="padding:0">
				<input type="text" class="form-control" name="FName" placeholder="First Name" value = '<?php echo $row->strFirstName; ?>' required>
			</div>
			<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3" style="padding:0">
				<label class="sr-only" for="FName">Middle Name</label>
				<input type="text" class="form-control" name="MName" placeholder="Middle Name" value = '<?php echo $row->strMiddleName; ?>' >
			</div>   
			<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-4" style="padding:0">
				<label class="sr-only" for="LName">Family name</label>
				<input type="text" class="form-control" name="LName" placeholder="Family Name" value = '<?php echo $row->strFamilyName; ?>' required>
			</div>


			<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2" style="padding:0">
				<label class="sr-only" for="FName">NM</label>
				<input type="text" class="form-control" name="EName" value = '<?php echo $row->strNameExtension; ?>' placeholder="N.E.">
			</div> 
		</div>
		<div class="form-inline" role="form">
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Department:</h5>
				<select class="form-control m-bot15" name="Dept">
					<option value = "IT" >Information Technology</option>
					<option value = "CS">Computer Science</option>
				</select>
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Date of Birth:</h5>
				<input type="Date" class="form-control" name="BDate" value = '<?php echo $row->dtBirthday; ?>' required>
			</div>
			<div class="form-group col-lg-6 col-sm-12 col-xs-12 col-md-6">
				<h5>Current Rank:</h5>
				<select class="form-control" name = "Rank">
					<?php

					$sql = "Select * from tblRank";;
					$query= mysqli_query($con,$sql);
					while($row1 = mysqli_fetch_object($query)){
						?>
						<option value=<?php echo $row1->intRank;?> <?php if($row->intCurrentRank == $row1->intRank){ echo "selected"; }?>  ><?php echo $row1->intRank; ?> </option> 
						<?php
					}
					?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-sm-12 col-xs-12 col-md-6">
				<h5>Date of Entry:</h5>
				<input type="Date" class="form-control" name="EDate" value = '<?php echo $row->dtDateofEntry; ?>' required>
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Faculty Status</h5>
				<select class="form-control m-bot15" name="FStatus">
					<option value = "Regular" <?php if($row->strStatus == 'Regular'){ echo "selected"; }?> >Regular</option>
					<option value = "PT" <?php if($row->strStatus == 'PT'){ echo "selected"; }?>>Part-Time</option>
				</select>
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding:0">
			<h4>ADDRESS:</h4>
		</div>
		<div class="form-inline row" role="form">

			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Building Number:</h5>
				<input type="text" class="form-control" name="BNo" placeholder="Building Number" value = '<?php echo $row->strBuildingNo; ?>'>
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Street:</h5>
				<input type="text" class="form-control" name="Street" placeholder="Street" value = '<?php echo $row->strStreet; ?>'>
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Purok:</h5>
				<input type="text" class="form-control" name="Purok" placeholder="Purok" value = '<?php echo $row->strPurok; ?>'>
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>City/Municipal:</h5>
				<input type="text" class="form-control" name="City" placeholder="City" value = '<?php echo $row->strCity; ?>' >
			</div>   
			<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
				<h5>Province:</h5>
				<input type="text" class="form-control" name="Province" placeholder="Province" value = '<?php echo $row->strProvince; ?>'>
			</div>       
		</div>
	</div>
	<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-info btn-md" name="btnEditRecord" onclick="return confirm('Do you want to save these changes?')" value='<?php echo $Id?>'> Save Record</button>
	</div>
	<?php
}
if($type ==2){
	$query=mysqli_query($con,"Select * from tbleducattainment where intID ='$Id'");
	$row=mysqli_fetch_object($query);	
	?>
	<div class="form-inline row">
		<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
		<h5>Degree Type:</h5>
			<input class="form-control" name="Type" readonly value = '<?php echo $row->strType ?>' type="text" placeholder="CourseName" />
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12"> 
			<h5>Degree Na,e:</h5>
				<input class="form-control" name="DegreeName" type="text" placeholder="CourseName" readonly value = '<?php echo $row->strDegree ?>' />
			</div> 
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
			<h5>School:</h5>
				<input class="form-control"  name="School" type="text" placeholder= "School" readonly value = '<?php echo $row->strSchool ?>'/>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
			<h5>Year Graduated:</h5>
				<input class="form-control"  name="Year" type="text" placeholder= "Year Graduated"  value = '<?php echo $row->strYearGraduated ?>'/>
			</div> 
			<div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
			<h5>Remarks:</h5>
				<input class="form-control" name="Remarks" type="text" placeholder= "Remarks"  required value = '<?php echo $row->strRemarks ?>'/>
			</div>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="padding-top:4%" >
		<button type="submit" class="btn btn-info btn-md" name="btnEditEduc" onclick="return confirm('Do you want to save these changes?')" value='<?php echo $Id?>'> Save Record</button>
		</div>
		<?php }
		?>