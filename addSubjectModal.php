

<!-- Modal -->
<form method="POST">
	<div id="addSubject" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add New Subjects</h4>
				</div>
				<div class="modal-body" id = "Subject">
					<div  class = "row col-sm-12 col-xs 12 col-lg-12 col-md-12">
						<div  class = " col-sm-12 col-xs 12 col-lg-9 col-md-9">
							<h4 style="float:right">Semester</h4>
						</div>
						<div  class = " col-sm-12 col-xs 12 col-lg-3 col-md-3">
							<select  class="form-control" name = "Semester" ">
								<option value = "1st">First</option>
								<option value = "2nd">Second</option>
								<option value = "Summer">Summer</option>
							</select>		
						</div>
					</div>

					<div  class = "row form-inline col-sm-12 col-xs 12 col-lg-12 col-md-12">
						<div class = "form-group col-sm-12 col-xs-12 col-lg-5 col-md-5">
							<select id="selectize_1" class="demo-default"  name = "Subjects[]" data-placeholder="Select a Subject.">
								<?php require("connection.php");
								$query = mysqli_query($con,"Select * from tblSubject");
								while($row=mysqli_fetch_object($query)){
									?>
									<option value = '<?php echo $row->strSubjectCode?>'><?php echo $row->strSubjectCode." - ".$row->strSubjectDesc?></option>
									<?php
								}?>
							</select>			

						</div>

						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Section[]" class="form-control" placeholder="Section"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Room[]" class="form-control" placeholder="Room"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-3 col-md-3" style="padding-left:0px">
							<input type=text name="Schedule[]" class="form-control" placeholder="Schedule"> 	

						</div>
					</div>
					<div  class = "row form-inline col-sm-12 col-xs 12 col-lg-12 col-md-12">
						<div class = "form-group col-sm-12 col-xs-12 col-lg-5 col-md-5">
							<select id="selectize_2" class="demo-default"  name = "Subjects[]" data-placeholder="Select a Subject.">
								<?php require("connection.php");
								$query = mysqli_query($con,"Select * from tblSubject");
								while($row=mysqli_fetch_object($query)){
									?>
									<option value = '<?php echo $row->strSubjectCode?>'><?php echo $row->strSubjectCode." - ".$row->strSubjectDesc?></option>
									<?php
								}?>
							</select>			

						</div>

						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Section[]" class="form-control" placeholder="Section"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Room[]" class="form-control" placeholder="Room"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-3 col-md-3" style="padding-left:0px">
							<input type=text name="Schedule[]" class="form-control" placeholder="Schedule"> 	

						</div>
					</div>
					<div  class = "row form-inline col-sm-12 col-xs 12 col-lg-12 col-md-12">
						<div class = "form-group col-sm-12 col-xs-12 col-lg-5 col-md-5">
							<select id="selectize_3" class="demo-default"  name = "Subjects[]" data-placeholder="Select a Subject.">
								<?php require("connection.php");
								$query = mysqli_query($con,"Select * from tblSubject");
								while($row=mysqli_fetch_object($query)){
									?>
									<option value = '<?php echo $row->strSubjectCode?>'><?php echo $row->strSubjectCode." - ".$row->strSubjectDesc?></option>
									<?php
								}?>
							</select>			

						</div>

						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Section[]" class="form-control" placeholder="Section"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Room[]" class="form-control" placeholder="Room"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-3 col-md-3" style="padding-left:0px">
							<input type=text name="Schedule[]" class="form-control" placeholder="Schedule"> 	

						</div>
					</div>
					<div  class = "row form-inline col-sm-12 col-xs 12 col-lg-12 col-md-12">
					<div class = "form-group col-sm-12 col-xs-12 col-lg-5 col-md-5">
						<select id="selectize_4" class="demo-default"  name = "Subjects[]" data-placeholder="Select a Subject.">
							<?php require("connection.php");
							$query = mysqli_query($con,"Select * from tblSubject");
							while($row=mysqli_fetch_object($query)){
								?>
								<option value = '<?php echo $row->strSubjectCode?>'><?php echo $row->strSubjectCode." - ".$row->strSubjectDesc?></option>
								<?php
							}?>
						</select>			

					</div>

					<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Section[]" class="form-control" placeholder="Section"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Room[]" class="form-control" placeholder="Room"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-3 col-md-3" style="padding-left:0px">
							<input type=text name="Schedule[]" class="form-control" placeholder="Schedule"> 	

						</div>
				</div><div  class = "row form-inline col-sm-12 col-xs 12 col-lg-12 col-md-12">
				<div class = "form-group col-sm-12 col-xs-12 col-lg-5 col-md-5">
					<select id="selectize_5" class="demo-default"  name = "Subjects[]" data-placeholder="Select a Subject.">
						<?php require("connection.php");
						$query = mysqli_query($con,"Select * from tblSubject");
						while($row=mysqli_fetch_object($query)){
							?>
							<option value = '<?php echo $row->strSubjectCode?>'><?php echo $row->strSubjectCode." - ".$row->strSubjectDesc?></option>
							<?php
						}?>
					</select>			

				</div>

				<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Section[]" class="form-control" placeholder="Section"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-2 col-md-2" style="padding-left:0px">
							<input type=text name="Room[]" class="form-control" placeholder="Room"> 	

						</div>
						<div class = "form-group col-sm-12 col-xs-12 col-lg-3 col-md-3" style="padding-left:0px">
							<input type=text name="Schedule[]" class="form-control" placeholder="Schedule"> 	

						</div>
			</div>

		</div>
		<div id ="addField" class = "row col-sm-12 col-xs 12 col-lg-12 col-md-12">
			<button style="float:right;" type = submit name="add_Subject" class="btn btn-md btn-info" href="#"><i class="icon_plus_alt2"></i> Add Subject</button></div>
			<div class="modal-footer">

			</div>
		</div>

	</div>
</div>
</form>
<?php
if (isset($_POST['add_Subject'])){
	$EmpNo = $_SESSION['EmpNo'];
	$query = mysqli_query($con,"Select * from tblcurrentsem");
	$row1= mysqli_fetch_object($query);
	$yr = $row1->strYear;
	$subj = $_POST['Subjects'];
	$sec = $_POST['Section'];
	$rm = $_POST['Room'];
	$sched = $_POST['Schedule'];	
	$sem=$_POST['Semester'];

	for($ctr = 0;$ctr<5;$ctr++){
		if(!empty($sec[$ctr])){
			$curSubj = $subj[$ctr];
			$curSect = $sec[$ctr];
			$curRoom = $rm[$ctr];
			$curSched = $sched[$ctr];
			mysqli_query($con,"Insert into tblfacultysubjects values ('$EmpNo','$curSubj','$curSect','$sem','$yr','$curRoom','$curSched')");
		}

	}

}

?>


