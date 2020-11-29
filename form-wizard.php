<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/build/jquery.steps.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Registration Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Registration Form</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h4 class="text-blue">Step by step</h4>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
						<h5>Account</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Email Address :</label>
											<input type="email" class="form-control">
										</div>
									
										<div class="form-group">
											<label>Username :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Password :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Re-type Password :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</section>
							<h5>Personal Info</h5>
							<section>
							<label >Please check his/her Birth Certificate for authentication</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >First Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Middle Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Last Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone Number :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Telephone Number :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Citizenship :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Religion :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Date of Birth :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label >Place of Birth :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
										<label>Current Address:</label>
										<input type="text" class="form-control">
										</div>
									</div>
								</div>

								<div class="col-md-6">
										<div class="form-group">
											<label>Gender:</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Male</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Female</label>
											</div>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label>Civil Status:</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Single</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Married</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Separated</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Widowed</label>
											</div>
										</div>
								</div>
								<div class="form-group">
											<label>Highest attainment on Educational :</label>
											<select class="form-control">
												<option>College Graduate</option>
												<option>Some College</option>
												<option>Highschool Graduate</option>
												<option>Some Highschool</option>
												<option>Elementary Graduate</option>
												<option>Some Elementary</option>
												<option>None</option>
											</select>
								</div>
								
							</section>
							<h5>Family</h5>
							<section>
							<label >Please check his/her Birth Certificate for authentication</label>
							<label >Father's Name</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >First Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Middle Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Last Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<label >Mother's Maiden Name</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >First Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Middle Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Last Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<label >Spouse's Name</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >First Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Middle Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Last Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>How many children?</label>
									<input id="demo3" type="text" value="" name="demo3">
									<label>Have babies(months to 5 years old) for vaccination service</label>
									<input id="demo3" type="text" value="" name="demo3">
								</div>
							</div>
							</section>
							<!-- Step 2 -->
							<h5>Job Status</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Have a job?: (If yes, pls check her/his working ids/documents)</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Yes</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">No</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio6">No, but i do have a business</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
											<label>Status:</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Contractual</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Regular/Permanent</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Household</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Self-employed</label>
											</div>
								</div>
								<div class="form-group">
											<label>Company Type:</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Government</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Private</label>
											</div>
											<div class="form-group">
												<label>Others :</label>
												<input type="text" class="form-control">
											</div>
								</div>
								<div class="form-group">
											<label>Income Classes: (You can check his/her documents)</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Poor (Below 11k monthly)</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Middle (Between 12k to 77k monthly)</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">Above Middle</label>
											</div>
								</div>

							</section>
							<h5>Health</h5>
							<section>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Have any health conditions?: (If yes, pls check her/his medical certificate/documents)</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Yes</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">No</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Specific Health Condition :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Frequency on medical check-up :</label>
											<select class="form-control">
												<option>Seldom</option>
												<option>Frequent</option>
												<option>Always</option>
											</select>
										</div>
									</div>
								</div>
							</section>
							<h5>Pets</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Do you own any animals in your home? : (You ask for pictures for verification)</label>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio4">Yes</label>
											</div>
											<div class="custom-control custom-radio mb-5">
												<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio5">No</label>
											</div>
										</div>
										<div class="form-group">
											<label>Kind of animal owned :</label>
											<div class="custom-control custom-checkbox mb-5">
												<input type="checkbox" class="custom-control-input" id="customCheck1-1">
												<label class="custom-control-label" for="customCheck1-1">Livestocks Animals</label>
											</div>
											<div class="custom-control custom-checkbox mb-5">
												<input type="checkbox" class="custom-control-input" id="customCheck2-1">
												<label class="custom-control-label" for="customCheck2-1">House Pets</label>
											</div>
											<div class="form-group">
											<label>How many animal?</label>
												<input id="demo3" type="text" value="" name="demo3">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Last Vaccine shot (Optional):</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date">
										</div>
									</div>
								</div>
							</section>
							<!-- Step 3 -->
							<h5>Others</h5>
							<section>
								<div class="row">
								<div class="col-md-6 col-sm-12">
									<label class="weight-600">Sectors (You can check multiple)</label>
										<div class="custom-control custom-checkbox mb-5">
											<input type="checkbox" class="custom-control-input" id="customCheck1-1">
											<label class="custom-control-label" for="customCheck1-1">Indigent (Poor/Needy)</label>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input type="checkbox" class="custom-control-input" id="customCheck2-1">
											<label class="custom-control-label" for="customCheck2-1">LGBT</label>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input type="checkbox" class="custom-control-input" id="customCheck3-1">
											<label class="custom-control-label" for="customCheck3-1">Solo Parents</label>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input type="checkbox" class="custom-control-input" id="customCheck4-1">
											<label class="custom-control-label" for="customCheck4-1">Person with Disability</label>
										</div>
										<div class="custom-control custom-checkbox mb-5">
											<input type="checkbox" class="custom-control-input" id="customCheck4-1">
											<label class="custom-control-label" for="customCheck4-1">Senior Citizen</label>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5>Remark</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Comments</label>
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</section>
						</form>
					</div>
				</div>

				

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Register Successfully!</h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								You can go to the Masterlist(On the Left Side) to print his/her QR Code
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
							</div>
						</div>
					</div>
				</div>
				<!-- success Popup html End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
	<script>
		$(".tab-wizard").steps({
			headerTag: "h5",
			bodyTag: "section",
			transitionEffect: "fade",
			titleTemplate: '<span class="step">#index#</span> #title#',
			labels: {
				finish: "Submit"
			},
			onStepChanged: function (event, currentIndex, priorIndex) {
				$('.steps .current').prevAll().addClass('disabled');
			},
			onFinished: function (event, currentIndex) {
				$('#success-modal').modal('show');
			}

		});
		// Bootstrap Touchspin
		$("input[name='demo_vertical2']").TouchSpin({
			verticalbuttons: true,
			verticalupclass: 'fa fa-plus',
			verticaldownclass: 'fa fa-minus'
		});
		$("input[name='demo3']").TouchSpin();
		$("input[name='demo1']").TouchSpin({
			min: 0,
			max: 100,
			step: 0.1,
			decimals: 2,
			boostat: 5,
			maxboostedstep: 10,
			postfix: '%'
		});
		$("input[name='demo2']").TouchSpin({
			min: -1000000000,
			max: 1000000000,
			stepinterval: 50,
			maxboostedstep: 10000000,
			prefix: '$'
		});
		$("input[name='demo3_22']").TouchSpin({
			initval: 40
		});
		$("input[name='demo5']").TouchSpin({
			prefix: "pre",
			postfix: "post"
		});
	</script>
</body>
</html>