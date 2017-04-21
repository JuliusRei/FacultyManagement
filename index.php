<?php require("header.php");?>
<body >
	<?php require("navigator.php");?>
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
								<div class="col-lg-12">
									<h4>Employee Number:</h4>
								</div>
								<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12 padding-remove">
									<div class= "col-lg-5 col-md-5 col-xs-12 col-sm-12 ">
										<input type="text" class="form-control" id="LName" placeholder="Employee Number">
									</div>
								</div>
								<div class="form-inline" role="form">
									<div class="col-lg-12">
										<h4>Full Name:</h4>
									</div>

									<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-4">
										<label class="sr-only" for="LName">Family name</label>
										<input type="text" class="form-control" id="LName" placeholder="Family Name">
									</div>
									<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-4">
										<label class="sr-only" for="FName">First Name</label>
										<input type="text" class="form-control" id="FName" placeholder="First Name">
									</div>
									<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-4">
										<label class="sr-only" for="FName">Middle Name</label>
										<input type="text" class="form-control" id="FName" placeholder="Middle Name">
									</div>         
								</div>
								<div class="form-inline" role="form">
									<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-3">
										<h5>Department:</h5>
										<select class="form-control m-bot15">
											<option>Information Technology</option>
											<option>Computer Science</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-sm-12 col-xs-12 col-md-3">
										<h5>Date of Birth:</h5>
										<input type="Date" class="form-control" id="FName" placeholder="Middle Name">
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

									<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
										<div class="col-lg-12">
											<h4>Email Address:</h4>
										</div>
										<div id = "container" style="height:auto" class="row col-lg-12">
										</div>
										<div class="col-lg-12">
										<button  id="add_Email" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
										</div>
									</div>
								</div>

								<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
									<div class="col-lg-12">
										<h4>Contact Number:</h4>
									</div>
									
									<div id = "contact"  style="height:auto"  class = "row form-inline col-lg-12"  role="form"  >
									</div>
									<div class="col-lg-12">
									<button  id="add_Contact" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
									</div>
								</div>


					</section>
					<section class="panel" >
							<header class="panel-heading">
								Educational Attainment
							</header>
							<div class="panel-body">
								<div class="form-inline" role="form">

									<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
										<div class="col-lg-12">
											<h4>Email Address:</h4>
										</div>
										<div id = "container" style="height:auto" class="row col-lg-12">
										</div>
										<div class="col-lg-12">
										<button  id="add_Email" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
										</div>
									</div>
								</div>

								<div class="form-group col-lg-12 col-sm-12 col-xs-12 col-md-12">
									<div class="col-lg-12">
										<h4>Contact Number:</h4>
									</div>
									
									<div id = "contact"  style="height:auto"  class = "row form-inline col-lg-12"  role="form"  >
									</div>
									<div class="col-lg-12">
									<button  id="add_Contact" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add new</button>
									</div>
								</div>

							

					</section>
				</div>
			</div>
		</section>
	</section>
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

				$('#contact').append('<div class="col-xs-12 col-sm-12 col-lg-2 col-md-2">Contact No. #'+countContact+'</div><div class="form-group col-xs-12 col-sm-12 col-lg-5 col-md-5"> <input class="form-control" id="ContactType_' + countContact + '" name="ContactType[]' + '" type="text" placeholder="Contact type" /></div> <div class="form-group col-xs-12 col-sm-12 col-lg-5 col-md-5"><input class="form-control" id="Contact_' + countContact + '" name="ContactNumber[]' + '" type="text" placeholder= "Contact Number"/></div>' );  
			});
		});



	</script>
</body>
</html>