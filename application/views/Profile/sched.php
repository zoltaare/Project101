<!DOCTYPE html>
<html>
<head>
	<title>Schedules</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/styles/bootstrap.css");?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/styles/style_ojt.css");?>">
	<script type="text/javascript" src="<?php echo base_url("assets/jquery/jquery-2.1.1.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/jquery/ojt.js");?>"></script>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="widget stacked widget-table action-table">
				<!-- <h1>Pending Validation</h1> -->
				<div class="widget-content">
					<!-- INFO -->
					<div class="media ojt-info">
						<a class="thumbnail pull-left" href="#">
							<img class="media-object" src="http://critterapp.pagodabox.com/img/user.jpg">
						</a>
						<div class="media-body">
						
							<div class="time-out">
								<span><strong>Time Out</strong></span>
							</div>
							<p class="media-heading"><strong>
								<?php  
									foreach ($info as $key => $value) {
										echo $value['First_Name'] ." ". $value['Middle_Name'] ." ". $value['Last_Name'];
									
								?>
							</strong></p>
							<h4>
								<span class="label label-info"><?php echo $value['Department']." Department"; }?></span>
								<span class="label label-info">DTR Summary</span>
								<span class="label label-danger ojt-logout"><a href="<?php echo base_url().'con_ojt/logout'; ?>">Logout</a></span>
							</h4>
							<!-- <p>
								<a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
								<a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
								<a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-ban-circle"></span> Unfollow</a>
							</p> -->
						</div>
					</div>

					<!-- SCHED -->
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time - In</th>
								<th>Time - Out</th>
								<th>Shift</th>
								<th class="td-actions">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$now = date('Y-m-d');
								foreach ($sched as $key => $value) {
									if($now === $value['Date_sched']){
										echo "<tr style='background-color: #5BC0DE;		'>
											<td>".$value['Date_sched']."</td>
											<td>".$value['Time_in']."</td>
											<td>".$value['Time_out']."</td>
											<td>".$value['Shift_desc']."</td>
											<td>".$value['Status']."</td>
										</tr>";	
									}else{	
										echo "<tr>
											<td>".$value['Date_sched']."</td>
											<td>".$value['Time_in']."</td>
											<td>".$value['Time_out']."</td>
											<td>".$value['Shift_desc']."</td>
											<td>".$value['Status']."</td>
										</tr>";
									}
								}
							 ?>
						</tbody>
					</table>

				</div> <!-- /widget-content -->
				</div> <!-- /widget -->
			</div>
		</div>
	</div>

</body>
</html>