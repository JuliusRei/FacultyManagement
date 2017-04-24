

<?php
	require('connection.php');
	$prevsection = $_POST['section'];
 	$sem = $_POST['sem'];
	$year = $_POST['year'];
	$subjCode = $_POST['subjCode'];
	$EmpNo = $_POST['EmpNo'];
	$query = mysqli_query($con,"Select * from tblfacultysubjects as a inner join tblsubject as b on a.forSubjectCode= b.strSubjectCode where forEmployeeNo = '$EmpNo' AND strSemester = '$sem' AND strYear = '$year' AND strSubjectCode = '$subjCode' and strYearandSection = '$prevsection' ");
	$row = mysqli_fetch_object($query);?>
<div class = "col-sm-12 col-xs-12 col-lg-12 col-md-12">
<h5><?php echo "Subject:</h5><h4> ".$row->strSubjectDesc?></h4>
</div>
<div class = "col-sm-12 col-xs-12 col-lg-12 col-md-12">
<h5>Section:</h5>
<input type = "text" class = "form-control" name = "Section" value='<?php echo $row->strYearandSection; ?>' disabled>
</div>
<div class = "col-sm-12 col-xs-12 col-lg-12 col-md-12">
<h5>Room:</h5>
<input type = "text" class = "form-control" name = "Room" value='<?php echo $row->strRoom; ?>' disabled>
</div>
<div class = "col-sm-12 col-xs-12 col-lg-12 col-md-12">
<h5>Schedule:</h5>
<input type = "text" class = "form-control" name = "Schedule" value='<?php echo $row->strSchedule; ?>' disabled>
</div>
<div class = "col-sm-12 col-xs-12 col-lg-12 col-md-12" style="padding-top:5%">
<button type = "submit" class = "btn btn-sm btn-danger" name = "btnDelete" value='<?php echo $row->strSubjectCode; ?>' onclick="return confirm('Do you want to save these changes?')">Delete Record</button>
<input type = text name = 'Semester' value = '<?php echo $sem; ?>' hidden>
<input type = text name = 'Year' value = '<?php echo $year; ?>' hidden>
<input type = text name = 'prevSection' value = '<?php echo $prevsection; ?>' hidden>
</div>
