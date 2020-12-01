<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>

    <div class="d-flex justify-content-end pt-5 pr-5">
        <form action="">
        <div class="input-group">
           <button type="submit" class=" btn btn-primary">Login</button>
        </div>
        </form>
    </div>

	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20" style="margin-left: 40rem; margin-top: -10rem;">
		<div class=" align-items-lg-center bg-white box-shadow pd-30 border-radius-5 w-50">
			<!---<h2 class="text-center mb-30">Login</h2>---->
			<form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Your Brgy Code/ Donation Code">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button"> Search</button>
                        </div>
                </div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>