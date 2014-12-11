<!DOCTYPE html>
<html>
<head>
	<title>OJT - <?php  echo $user->First_Name." ".$user->Middle_Name." ".$user->Last_Name; ?></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/styles/bootstrap.css");?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/styles/style_ojt.css");?>">
	<script type="text/javascript" src="<?php echo base_url("assets/jquery/jquery-2.1.1.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/jquery/ojt.js");?>"></script>

</head>
<body>

	<div class="container">
		<div class="row">
				<!-- button -->
				<div class="box-icon">
					<span class="fa fa-5x fa-arrow-circle-right"></span>
				</div>
				<!-- table -->
				<div class="col-md-4 timein-info">
		            <div class="panel panel-success">
		                	
		                <div class="panel-body text-center">
		                    <p class="lead">
		                        <strong><?php  date_default_timezone_set('Asia/Singapore'); 
		                        echo $user->First_Name." ".$user->Middle_Name[0].". ".$user->Last_Name;
		                        ?></strong></p>
		                </div>
		                <ul class="list-group list-group-flush text-center">
		                    <li class="list-group-item"><?php echo date('l jS \of F Y'); ?></li>
		                    <li class="list-group-item"><?php echo date("H:i:s"); ?></li>
		                    <li class="list-group-item">Time Out</li>
		                </ul>
		                <div class="panel-footer">
		                    <a class="btn btn-lg btn-block btn-success viewsched" href="<?php echo base_url() .'con_login/schedules/'.$user->User_ID; ?>">View All Schedule</a>
		                </div>
		            </div>
		        </div>

		</div>
	</div>
</body>
</html>