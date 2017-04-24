<?php
$type= $_POST['type'];
if($type==1){
	?>
	<h4>Email:</h4>
	<div id = "container" style="height:auto" class="row col-lg-12">
	</div>
	<div class="col-lg-12" style="padding-top:3%">
		<button  type ="button" onclick="addEmail()" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add New Email</button>
	</div>
	<h4>Contact Detail:</h4>
	<div id = "contact"  style="height:auto"   role="form"  >
	</div>
	<div class="col-lg-12" style="padding-top:3%">
		<button  onclick="addContact()"" type=button id="add_Contact" class="btn btn-sm btn-info" href="#"><i class="icon_plus_alt2"></i> Add New Contact</button>
	</div>
	<div class="col-lg-12">
		<button type=submit class="btn btn-sm btn-info" name = 'btnSave' onclick= "return confirm('Do you want to save these changes?')" style="float:right !important"> Save Record </button>
	</div>
	<?php
}
else if($type==2){
	?>
	<div class="col-lg-12">
		<div id = "otherDegree"  role="form"  >
		</div>
		<div class="col-lg-12">
		<button  type = button id="add_otherDegree"  class="btn btn-sm btn-info" href="#" onclick="addDegree()"><i class="icon_plus_alt2"></i> Add new Degree</button>
		</div>
		</div>
			<div class="col-lg-12">
		<button type=submit class="btn btn-sm btn-info" name = 'btnSaveDegree' onclick= "return confirm('Do you want to save these changes?')"style="float:right !important"> Save Record </button>
	</div>
<?php
	}
	?>
