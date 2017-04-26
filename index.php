<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>	
	<form method = POST>
	<section id="main-content">		
		<section class="wrapper ">	
		<div class="row ">
		<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<header class="panel-heading">					
			Faculty List
		</header>		
		
				<section class="panel">
				<table  class="table table-striped table-bordered table-hover" align="center" id = "dataTable"  border = '2' style = 'width:90%'>
				<thead>
				<tr>
				<th>Faculty Name</th>
				<th>Department</th>
				<th>Rank</th>
				<th>Status</th>
				<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$sql="Select strEmployeeNo,Concat(strFirstName,' ',charMiddleInitial,' ',strFamilyName,' ',strNameExtension) as 'Name',Department,intCurrentRank,strStatus from tblgeneralinfo";
				$query=mysqli_query($con,$sql);
				while($row=mysqli_fetch_object($query)){?>
				<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Department; ?></td>
				<td><?php echo $row->intCurrentRank; ?></td>
				<td><?php echo $row->strStatus; ?></td>
				<td><button name="btnView" type=submit class ="btn btn-info btn-sm" value = '<?php echo $row->strEmployeeNo ?>'>View</button></td>	
				</tr>
				<?php } 
				?>
				</tbody>
				</table>
				</section>
				</div>
			</div>
		</section>
	</section>
	<?php
	if(isset($_POST['btnView'])){
		$_SESSION['EmpNo'] = $_POST['btnView'];
		echo "<script>window.location = 'FacultyPersonalDetails.php'</script>";

	}
	?>
</form>
	<?php require("footer.php");?>

	<script>
		$(document).ready(function() {
			$('#dataTable').dataTable();		  
		});
	</script>
	
</body>
</html>