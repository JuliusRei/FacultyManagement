<?php require("header.php");
require("connection.php");?>
<body >
	<?php require("navigator.php");?>	

	<section id="main-content">		
		<section class="wrapper ">	
		<div class="row ">
		<div class="col-lg-10 col-xs-10 col-md-12 col-sm-12">
			<section class="panel">
                          <header class="panel-heading" style = "padding-top:5px">
                          <?php
                                      $EmpNo = $_SESSION['EmpNo'];
                                      $sql = "Select * from tblgeneralinfo where strEmployeeNo = '$EmpNo'";
                                      $query= mysqli_query($con,$sql);
                                      $row = mysqli_fetch_object($query);
                                      echo "<h3>".$row->strFirstName." ".$row->charMiddleInitial." ".$row->strFamilyName." ".$row->strNameExtension."</h3>";
                                      $sql="Select * from tblRank where intRank = '".$row->intCurrentRank."'";
                                      $query = mysqli_query($con,$sql);
                                      $row2= mysqli_fetch_object($query);
                                    ?>
                          </header>
                          <div class="panel-body">
                              <div class="form-inline" role="form">
                                  <div class="form-group col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
                                	<h4>Employee Number:</h4>
                                    <div class="form-group col-lg-2 col-md-2 col-xs-12 col-sm-12 padding-remove " >
                                     <input type=text class ="form-control" readonly value = <?php echo $EmpNo?>>
                                </div>
                                  
                              </div>
                              <div class="form-inline" role="form">
                              <div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                     <h4>Date of Birth:</h4>
                                     <input type=text class ="form-control" readonly value = <?php $date=date_create($row->dtBirthday);
                                     																echo date_format($date,"F-d-Y")?>>
                                  </div>
                                 <div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                     <h4>Department:</h4>
                                     <input type=text class ="form-control" readonly value = <?php echo $row->Department?>>
                                  </div>
                                  <div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                     <h4>Date of Entry:</h4>
                                     <input type=text class ="form-control" readonly value = <?php $date=date_create($row->dtDateofEntry);
                                     															echo date_format($date,"F-d-Y")?>>
                                  </div>
                                  <div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                     <h4>Present Rank:</h4>
                                     <input type=text class ="form-control" readonly value = <?php echo $row->intCurrentRank ?>>
                                  </div>
                                  <div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                     <h4>Salary Grade:</h4>
                                     <input type=text class ="form-control" readonly value = <?php echo $row2->decSalary ?>>
                                  </div>
                                  <div class="form-group col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                     <h4>Salary Grade:</h4>
                                     <input type=text class ="form-control" readonly value = <?php echo $row->strStatus ?>>
                                  </div>

                                  
                                  
                              </div>

                          </div>
                      </section>
			</div>
			</div>
		</section>
	</section>

	<?php require("footer.php");?>

	<script>
		$(document).ready(function() {
			$('#dataTable').dataTable();		  
		});
	</script>
	
</body>
</html>