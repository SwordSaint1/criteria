<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Awards</title>
  <link rel="icon" href="../../dist/img/logo.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
<!--factory 1-98-->
<section class="content">
	<div class="container-fluid">
		<div class="row">  
			<div class="col-lg-12 col-12">
				<div class="card card">
					<div class="card-header">
						<h2 class="card-title" style="font-size: 30px;"><b>Mr. & Miss CLOSE-UP SMILE</b></h2>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4><b>Mr.</b></h4>
								<hr>
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap table-hover" id="">
					                    <thead style="text-align:center;">
					                    <th>#</th>
					                    <th>Contestant</th>
					                    <th>Score</th> 
					                    </thead>
					                    <tbody style="text-align:center;">
					                    	<?php
					                    	require '../../process/conn.php';
					                    	$c = 0;
					                  $query = "SELECT contestant.contestant_name, (mr_miss_smile.capturing_smile + mr_miss_smile.confidence + mr_miss_smile.projection) AS total_best_in_smile_mr FROM contestant LEFT JOIN mr_miss_smile ON mr_miss_smile.contestant = contestant.contestant_name WHERE contestant.gender = 'male' AND mr_miss_smile.capturing_smile != '' GROUP BY contestant.contestant_name ORDER BY total_best_in_smile_mr DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_in_smile_mr'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
					                    	?>
					                    </tbody>
					                </table>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4><b>Ms.</b></h4>
								<hr>
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap table-hover" id="">
					                    <thead style="text-align:center;">
					                    <th>#</th>
					                    <th>Contestant</th>
					                    <th>Score</th> 
					                    </thead>
					                    <tbody style="text-align:center;">
					                    	<?php
					                    	require '../../process/conn.php';
					                    	$c = 0;
					                    	$query = "SELECT contestant.contestant_name, (mr_miss_smile.capturing_smile + mr_miss_smile.confidence + mr_miss_smile.projection) AS total_best_in_smile_ms FROM contestant LEFT JOIN mr_miss_smile ON mr_miss_smile.contestant = contestant.contestant_name WHERE contestant.gender = 'female' AND mr_miss_smile.capturing_smile != '' GROUP BY contestant.contestant_name ORDER BY total_best_in_smile_ms DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_in_smile_ms'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
					                    	?>
					                    </tbody>
					                </table>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4><b>Ms. Gay</b></h4>
								<hr>
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap table-hover" id="">
					                    <thead style="text-align:center;">
					                    <th>#</th>
					                    <th>Contestant</th>
					                    <th>Score</th> 
					                    </thead>
					                    <tbody style="text-align:center;">
					                    	<?php
					                    	require '../../process/conn.php';
					                    	$c = 0;
					                    	$query = "SELECT contestant.contestant_name, (mr_miss_smile.capturing_smile + mr_miss_smile.confidence + mr_miss_smile.projection) AS total_best_in_smile_gay FROM contestant LEFT JOIN mr_miss_smile ON mr_miss_smile.contestant = contestant.contestant_name WHERE contestant.gender = 'gay' AND mr_miss_smile.capturing_smile != '' GROUP BY contestant.contestant_name ORDER BY total_best_in_smile_gay DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
		
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_in_smile_gay'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
					                    	?>
					                    </tbody>
					                </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
	 var printCount =1;
    var waiting_time=printCount * 500;
    setTimeout(print_data, waiting_time);
    function print_data(){  
         window.print();
    }
</script>
</body>
</html>