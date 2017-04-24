<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	
	<form method=POST>	
		<section id="main-content">		

			<section class="wrapper">


				<div class=row>
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
						<section class="panel">
							<header class="panel-heading">					
								Personal Information
							</header>
							<div class="panel-body">
								<div class="form-inline" role="form">
									<div class="col-lg-6">
										<h4>Employee Number:</h4>
									</div>
									<div class="col-lg-6">
										<button type=submit class="btn btn-md btn-info" name = 'btnSave' style="float:right !important"> Save Record </button>
									</div>
									<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12 padding-remove">
										<div class= "col-lg-5 col-md-5 col-xs-12 col-sm-12 ">
											<input type="text" class="form-control" name="EmpNo" placeholder="Employee Number" required>
										</div>
									</div>
									<div class="form-inline" role="form">
										<div class="col-lg-12">
											<h4>Full Name:</h4>
										</div>
										<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
											<label class="sr-only" for="FName">First Name</label>
											<input type="text" class="form-control" name="FName" placeholder="First Name" required>
										</div>
										<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
											<label class="sr-only" for="FName">Middle Name</label>
											<input type="text" class="form-control" name="MName" placeholder="Middle Name" >
										</div>   
										<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-4">
											<label class="sr-only" for="LName">Family name</label>
											<input type="text" class="form-control" name="LName" placeholder="Family Name" required>
										</div>
										
										
										<div class="form-group col-lg-1 col-sm-12 col-xs-12 col-md-1">
											<label class="sr-only" for="FName">NM</label>
											<input type="text" class="form-control" name="EName" placeholder="N.E.">
										</div>         
									</div>
									<div class="form-inline" role="form">
										<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
											<h5>Department:</h5>
											<select class="form-control m-bot15" name="Dept">
												<option value = "IT">Information Technology</option>
												<option value = "CS">Computer Science</option>
											</select>
										</div>
										<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
											<h5>Date of Birth:</h5>
											<input type="Date" class="form-control" name="BDate" required>
										</div>
										<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2">
											<h5>Current Rank:</h5>
											<select class="form-control" name = "Rank">
											<?php
											$sql = "Select * from tblRank";;
											$query= mysqli_query($con,$sql);
											while($row = mysqli_fetch_object($query)){
											?>
											<option value=<?php echo $row->intRank;?> ><?php echo $row->intRank; ?> </option> 
											<?php
											}
											?>
											</select>
										</div>
										<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2">
											<h5>Date of Entry:</h5>
											<input type="Date" class="form-control" name="EDate" required>
										</div>
										<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2">
											<h5>Faculty Status</h5>
											<select class="form-control m-bot15" name="FStatus">
												<option value = "Regular">Regular</option>
												<option value = "PT">Part-Time</option>
											</select>
										</div>
									</div>
								</div>

							</section>
							<section class="panel" >
								<header class="panel-heading">
									Contact Information

								</header>
								<div class="panel-body" >
								<div class="form-inline" role="form">
										<div class="col-lg-12">
											<h4>Address:</h4>
										</div>
										<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2">
											<input type="text" class="form-control" name="BNo" placeholder="Building Number" >
										</div>
										<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2">
											<input type="text" class="form-control" name="Street" placeholder="Street" >
										</div>
										<div class="form-group col-lg-2 col-sm-12 col-xs-12 col-md-2">
											<input type="text" class="form-control" name="Purok" placeholder="Purok" >
										</div>
										<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
											<input type="text" class="form-control" name="City" placeholder="City" >
										</div>   
										<div class="form-group col-lg-3 col-sm-12 col-xs-12 col-md-3">
											<input type="text" class="form-control" name="Province" placeholder="Province">
										</div>       
									</div>
									<div class="form-inline" role="form">

										<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
											<div class="col-lg-12">
												<h4>Email Address:</h4>
											</div>
											<div id = "container" style="height:auto" class="row col-lg-12">
											</div>
											<div class="col-lg-12">
												<button  type ="button" id="add_Email" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
											</div>
										</div>
									</div>

									<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
										<div class="col-lg-12">
											<h4>Contact Number:</h4>
										</div>

										<div id = "contact"  style="height:auto"   role="form"  >
										</div>
										<div class="col-lg-12">
											<button  type=button id="add_Contact" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
										</div>
									</div>


								</section>
								<section class="panel" >
									<header class="panel-heading">
										Educational Attainment
									</header>
									<div class="panel-body">
										<div class="form-inline row" role="form">
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<h4>Bachelor's Degree </h4>
											</div>

											<div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3">
												<input type=text placeholder="Course Name" name="BSName" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3">
												<input type=text placeholder="School" name = "BSSchool" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<input type=text placeholder="Year Graduated" name = "BSYear" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<input type=text placeholder="Remarks" name = "BSRemarks" class="form-control">
											</div>
										</div>

										<div class="form-inline row" role="form">
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<h4>Master's Degree </h4>
											</div>

											<div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3">
												<input type=text placeholder="Course Name" name="MasterName" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3">
												<input type=text placeholder="School" name="MasterSchool" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<input type=text placeholder="Year Graduated" name="MasterYear" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<input type=text placeholder="Remarks" name="MasterRemarks" class="form-control">
											</div>
										</div>					
										<div class="form-inline row" role="form">
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<h4>Doctorate Degree </h4>
											</div>

											<div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3">
												<input type=text placeholder="Course Name" name="DoctorName" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3">
												<input type=text placeholder="School" name="DoctorSchool" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<input type=text placeholder="Year Graduated" name="DoctorYear" class="form-control">
											</div>
											<div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2">
												<input type=text placeholder="Remarks" name="DoctorRemarks" class="form-control">
											</div>
										</div>		

										<div id = "otherDegree"  role="form"  >
										</div>
										<div class="col-lg-12">
											<button  type = button id="add_otherDegree" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
										</div>
									</div>



								</section>
							</div>
						</div>
					</section>
				</section>
				<?php
				if(isset($_POST['btnSave']))
				{

					$EmpNo = mysqli_real_escape_string($con,$_POST['EmpNo']);
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
					mysqli_query($con,"Insert into tblgeneralInfo values ('$EmpNo', '$LName', '$FName', '$MI', '$MName', '$EName','$Dept','$Street','$Purok','$BNo','$City','$Province','$BDate','$EDate',$Rank,
						'$FStatus')");

					if(!empty($_POST['BSName']) && !empty($_POST['BSSchool']) && !empty($_POST['BSYear']) && !empty($_POST['BSRemarks'])){
						$Degree = mysqli_real_escape_string($con,$_POST['BSName']);
						$School = mysqli_real_escape_string($con,$_POST['BSSchool']);
						$YrGrad = mysqli_real_escape_string($con,$_POST['BSYear']);
						$DegRemark = mysqli_real_escape_string($con,$_POST['BSRemarks']);
						mysqli_query($con,"Insert into tbleducAttainment(`forEmployeeNo`, `strType`, `strDegree`, `strSchool`, `strYearGraduated`, `strRemarks`) values ('$EmpNo','Bachelors', '$Degree', '$School','$YrGrad','$DegRemark')");

					}
					if(!empty($_POST['MasterName']) && !empty($_POST['MasterSchool']) && !empty($_POST['MasterYear']) && !empty($_POST['MasterRemarks'])){
						$MDegree = mysqli_real_escape_string($con,$_POST['MasterName']);
						$MSchool = mysqli_real_escape_string($con,$_POST['MasterSchool']);
						$MYrGrad = mysqli_real_escape_string($con,$_POST['MasterYear']);
						$MDegRemark = mysqli_real_escape_string($con,$_POST['MasterRemarks']);
						mysqli_query($con,"Insert into tbleducAttainment(`forEmployeeNo`, `strType`, `strDegree`, `strSchool`, `strYearGraduated`, `strRemarks`) values ('$EmpNo','Masters', '$MDegree', '$MSchool','$MYrGrad','$MDegRemark')");
						echo "<script>alert('worked');</script>";
					}
					if(!empty($_POST['DoctorName']) && !empty($_POST['DoctorSchool']) && !empty($_POST['DoctorYear']) && !empty($_POST['DoctorRemarks'])){
						$YDegree = mysqli_real_escape_string($con,$_POST['DoctorName']);
						$YSchool = mysqli_real_escape_string($con,$_POST['DoctorSchool']);
						$YYrGrad = mysqli_real_escape_string($con,$_POST['DoctorYear']);
						$YDegRemark = mysqli_real_escape_string($con,$_POST['DoctorRemarks']);
						mysqli_query($con,"Insert into tbleducAttainment (`forEmployeeNo`, `strType`, `strDegree`, `strSchool`, `strYearGraduated`, `strRemarks`) values ('$EmpNo','Doctors', '$YDegree', '$YSchool','$YYrGrad','$YDegRemark')");
						echo "<script>alert('worked');</script>";	
					}					
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
								echo "<script>alert('$curtype - $curno')</script>";
							}

						}
					}
					if(isset($_POST['DegreeName'])&& isset($_POST['School']) && isset($_POST['Year']) && isset($_POST['Remarks'])){
						$course = $_POST['DegreeName'];
						$school = $_POST['School'];
						$Year= $_POST['Year'];
						$Remarks =$_POST['Remarks'];
						$countOther = count($course);
						$curCourse = "";
						$curSchool = "";
						$curYear= "";
						$curRemark = "";
						for($ctr = 0 ;$ctr<$countOther;$ctr++){
							if(!empty($course[$ctr]) && !empty($school[$ctr]) && !empty($Year[$ctr]) && !empty($Remarks[$ctr])){
								$curCourse = mysqli_real_escape_string($con,$course[$ctr]);
								$curSchool = mysqli_real_escape_string($con,$school[$ctr]);
								$curYear = mysqli_real_escape_string($con,$Year[$ctr]);
								$curRemark = mysqli_real_escape_string($con,$Remarks[$ctr]);
								mysqli_query($con,"Insert into tbleducAttainment(`forEmployeeNo`, `strType`, `strDegree`, `strSchool`, `strYearGraduated`, `strRemarks`) values ('$EmpNo', 'Other Degree','$curCourse','$curSchool','$curYear','$curRemark')");
								echo "<script>alert('$curCourse - $curSchool - $curYear - $curRemark')</script>";
							}
						}

					}
				}

				
				?>
			</form>
			<?php require("footer.php");?>
			<script>
				var countEmail = 0;
				$(document).ready(function() {
					$("#add_Email").click(function() {
						countEmail=countEmail+1;

						$('#container').append('<div class="col-xs-12 col-sm-12 col-lg-10 col-md-10"> <h5>Email #'+countEmail+'</h5></div><div class="col-xs-12 col-sm-12 col-lg-10 col-md-10"> <input class="form-control" id="Email_' + countEmail + '" name="Email[]' + '" type="text" /></div>' );  
					});
				});
				var countContact = 0;
				$(document).ready(function() {
					$("#add_Contact").click(function() {
						countContact=countContact+1;
						$('#contact').append('<div class = "row form-inline" ><div class="col-xs-12 col-sm-12 col-lg-2 col-md-2"><h4>Contact No. #'+countContact+'</h4></div><div class="form-group col-xs-12 col-sm-12 col-lg-5 col-md-5"> <input class="form-control" id="ContactType_' + countContact + '" name="ContactType[]' + '" type="text" placeholder="Contact type" /></div> <div class="form-group col-xs-12 col-sm-12 col-lg-5 col-md-5"><input class="form-control" id="Contact_' + countContact + '" name="ContactNumber[]' + '" type="text" placeholder= "Contact Number"/></div></div>' );  
					});
				});
				var countOtherDegree = 0;
				$(document).ready(function() {
					$("#add_otherDegree").click(function() {
						countOtherDegree=countOtherDegree+1;
						$('#otherDegree').append('<div class="form-inline row"><div class="col-xs-12 col-sm-12 col-lg-2 col-md-2"><h4>Other Degree #'+countOtherDegree+'</h4></div><div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3"> <input class="form-control" id="DegreeName_' + countOtherDegree + '" name="DegreeName[]' + '" type="text" placeholder="CourseName" /></div> <div class="form-group col-xs-12 col-sm-12 col-lg-3 col-md-3"><input class="form-control" id="School_' + countOtherDegree + '" name="School[]' + '" type="text" placeholder= "School"/></div><div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2"><input class="form-control" id="Year_' + countOtherDegree + '" name="Year[]' + '" type="text" placeholder= "Year Graduated"/></div> <div class="form-group col-xs-12 col-sm-12 col-lg-2 col-md-2"><input class="form-control" id="Remarks_' + countOtherDegree + '" name="Remarks[]' + '" type="text" placeholder= "Remarks"/></div></div>' );  
					});
				});



			</script>
		</body>
		</html>