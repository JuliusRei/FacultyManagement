<!-- Modal -->
<form method="POST">
	<div id="EditDetail" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Faculty Data</h4>
				</div>
				<div class="modal-body" id = "Data">
					
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

		</div>
	</div>
</form>
<?php
require('connection.php');
$EmpNo = $_SESSION['EmpNo'];
if(isset($_POST['btnDeletePerson'])){
	$Id = $_POST['btnDeleteEmail'];
	$result= mysqli_query($con,"Delete from tblemailfaculty where forEmployeeNo='$EmpNo'");
	$result= mysqli_query($con,"Delete from tblcontactfaculty where forEmployeeNo='$EmpNo'");
	$result= mysqli_query($con,"Delete from tblfacultyeval where forEmployeeNo='$EmpNo'");
	$result= mysqli_query($con,"Delete from tblfacultysubjects where forEmployeeNo='$EmpNo'");
	$result= mysqli_query($con,"Delete from tbleducAttainment where forEmployeeNo='$EmpNo'");
	$result= mysqli_query($con,"Delete from tblgeneralInfo where strEmployeeNo='$EmpNo'");
	if(!$result){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		session_destroy();
		echo "<script>alert('Changes Saved')
		window.location= 'viewFaculty.php'</script>";
	}
}
if(isset($_POST['btnDeleteEmail'])){
	$Id = $_POST['btnDeleteEmail'];
	$result= mysqli_query($con,"Delete from tblemailfaculty where strEmailAddress='$Id' AND forEmployeeNo='$EmpNo'");
	if(!$result){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')</script>";
	}
}
if(isset($_POST['btnDeleteContact'])){
	$Id = $_POST['btnDeleteContact'];
	$result= mysqli_query($con,"Delete from tblcontactfaculty where strContactNo='$Id' AND forEmployeeNo='$EmpNo'");
	if(!$result){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')</script>";
	}
}
if(isset($_POST['btnDeleteDegree'])){
	$Id = $_POST['btnDeleteDegree'];
	$result= mysqli_query($con,"Delete from tbleducAttainment where intID='$Id' AND forEmployeeNo='$EmpNo'");
	if(!$result){
		echo "<script>alert('Unable to make changes')</script>";
	}
	else{
		echo "<script>alert('Changes Saved')</script>";
	}
}
if(isset($_POST['btnSave'])){
	if(isset($_POST['Email'])){
		foreach($_POST['Email'] as $key=>$value){
			mysqli_query($con,"Insert into tblemailFaculty(`forEmployeeNo`, `strEmailAddress`) values ('$EmpNo', '$value')");
		}
	}

	if(isset($_POST['ContactType']) && isset($_POST['ContactNumber'])){
		$Type= $_POST['ContactType'];
		$ContactNumber= $_POST['ContactNumber'];
		$counttype = count($Type);
		$curtype = "";
		$curno = "";
		for($ctr = 0; $ctr<$counttype;$ctr++){
			if(!empty($Type[$ctr]) && !empty($ContactNumber[$ctr])){
				$curtype = $Type[$ctr];
				$curno = $ContactNumber[$ctr];
				mysqli_query($con,"Insert into tblcontactFaculty(`forEmployeeNo`, `strContactNo`, `strContactType`) values ('$EmpNo', '$curno','$curtype')");

			}

		}
	}

}
if(isset($_POST['btnSaveDegree'])){
	if(isset($_POST['DegreeName'])&& isset($_POST['School']) && isset($_POST['Year']) && isset($_POST['Remarks'])){
		$type=  $_POST['DegreeType'];
		$course = $_POST['DegreeName'];
		$school = $_POST['School'];
		$Year= $_POST['Year'];
		$Remarks =$_POST['Remarks'];
		$countOther = count($course);
		$curCourse = "";
		$curSchool = "";
		$curYear= "";
		$curRemark = "";
		$curType= "";
		for($ctr = 0 ;$ctr<$countOther;$ctr++){
			if(!empty($course[$ctr]) && !empty($school[$ctr]) && !empty($Year[$ctr]) && !empty($Remarks[$ctr])){
				$curCourse = mysqli_real_escape_string($con,$course[$ctr]);
				$curSchool = mysqli_real_escape_string($con,$school[$ctr]);
				$curYear = mysqli_real_escape_string($con,$Year[$ctr]);
				$curRemark = mysqli_real_escape_string($con,$Remarks[$ctr]);
				$curType = mysqli_real_escape_string($con,$type[$ctr]);
				mysqli_query($con,"Insert into tbleducAttainment(`forEmployeeNo`, `strType`, `strDegree`, `strSchool`, `strYearGraduated`, `strRemarks`) values ('$EmpNo', '$curType','$curCourse','$curSchool','$curYear','$curRemark')");

			}
		}

	}
}
if(isset($_POST['btnEditEduc'])){

		$Id=$_POST['btnEditEduc'];
		$Year= $_POST['Year'];
		$Remarks =$_POST['Remarks'];
		$curRemark = mysqli_real_escape_string($con,$Remarks);
		$curYear = mysqli_real_escape_string($con,$Year);
		$a = mysqli_query($con,"UPDATE tbleducAttainment set strYearGraduated = '$curYear', strRemarks = '$curRemark' where intID = '$Id'");
		if(!$a){
			die(mysqli_error($con));
		}
		}
			

if(isset($_POST['btnEditRecord'])){
	$EmpNo=$_POST['btnEditRecord'];
	$LName = mysqli_real_escape_string($con,$_POST['LName']);
	$FName = mysqli_real_escape_string($con,$_POST['FName']);
	$EDate = $_POST['EDate'];
	$BDate = $_POST['BDate'];
	$Dept = $_POST['Dept'];
	$Rank = $_POST['Rank'];
	$FStatus = $_POST['FStatus'];

	if(empty($_POST["MName"])){
		$MName = "";
		$MI= "";} 
		else{
			$M= $_POST["MName"];
			$len = strlen($M)-1;
			$MI= substr($M, 0,-($len));
			$MName =  mysqli_real_escape_string($con,$_POST["MName"]);}
			if(empty($_POST["EName"])){$EName = "";} else{$EName = $_POST["EName"];}
			if(empty($_POST['Street'])){$Street = "";}else{$Street= mysqli_real_escape_string($con,$_POST['Street']);}
			if(empty($_POST['Purok'])){$Purok = "";}else{$Purok= mysqli_real_escape_string($con,$_POST['Purok']);}
			if(empty($_POST['City'])){$City = "";}else{$City= mysqli_real_escape_string($con,$_POST['City']);}		
			if(empty($_POST['Province'])){$Province = "";}else{$Province= mysqli_real_escape_string($con,$_POST['Province']);}		
			if(empty($_POST['BNo'])){$BNo = "";}else{$BNo= mysqli_real_escape_string($con,$_POST['BNo']);}		
			$result = mysqli_query($con,"Update tblgeneralInfo set strFamilyName ='$LName', strFirstName ='$FName', charMiddleInitial = '$MI', strMiddleName ='$MName', strNameExtension = '$EName', Department = '$Dept',strStreet = '$Street', strPurok = '$Purok', strBuildingNo = '$BNo', strCity = '$City', strProvince = '$Province', dtBirthday = '$BDate', dtDateofEntry = '$EDate',intCurrentRank = $Rank,
				strStatus = '$FStatus' where strEmployeeNo = '$EmpNo' ");
			if(!$result){
				echo "<script>alert('Unable to make changes')</script>";
			}
			else{
				echo "<script>alert('Changes Saved')</script>";
			}

		}

		?>