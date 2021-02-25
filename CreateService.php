<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
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
								<h4>Services</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Service</a></li>
									<li class="breadcrumb-item active" aria-current="page">Create Service</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
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

				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue mb-30">Create Service</h4>
						</div>
					</div>
					<form>

					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Service Type</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="SAP Distribution">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Service Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="SAP Distibution">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Service Source</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Govermnent">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description:</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="form-control"></textarea>
							</div>
						</div>

						<div clas="form-group row">
							<div class="text-center">
							<a href="#" class="btn btn-warning">Cancel</a>
							<a href="#" class="btn btn-primary">Submit</a>
							</div>	
						</div>

					</form>
					
						</div>
					</div>
				</div>
				<!-- horizontal Basic Forms End -->




		
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>