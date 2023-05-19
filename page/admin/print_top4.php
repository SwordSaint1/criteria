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
						<h2 class="card-title" style="font-size: 30px;"><b>Top 4</b></h2>
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
					                    	$query = "SELECT contestant_name,(total_casual + total_prod + total_swim) AS total_eval
											FROM
											(
											SELECT contestant.contestant_name,(best_in_casual.suitability + best_in_casual.stage_presence + best_in_casual.uniqueness + best_in_casual.audience_impact *0.30) AS total_casual, 
											(best_in_prod.bearing + best_in_prod.stage_presence + best_in_prod.project_execution + best_in_prod.audience_impact * 0.20) AS total_prod,
											(best_in_swim.body_figure + best_in_swim.confidence_style + best_in_swim.stage_presence + best_in_swim.over_all * 0.50) AS total_swim
											 FROM contestant
											LEFT JOIN best_in_prod ON best_in_prod.contestant = contestant.contestant_name
											LEFT JOIN best_in_swim ON best_in_swim.contestant = contestant.contestant_name
											LEFT JOIN best_in_casual ON best_in_casual.contestant = contestant.contestant_name
											WHERE contestant.gender = 'male' AND best_in_casual.suitability != '' AND best_in_prod.bearing != '' AND best_in_swim.body_figure != ''
											GROUP BY contestant.contestant_name
											) AS J ORDER BY total_eval DESC LIMIT 4";
											$stmt = $conn->prepare($query);
											$stmt->execute();
											if ($stmt->rowCount() > 0) {
												foreach($stmt->fetchALL() AS $j){
													$total_eval = $j['total_eval'];
													$total = (($total_eval / 300)*100);
													$c++;

														echo '<tr>';
															echo '<td>'.$c.'</td>';
															echo '<td>'.$j['contestant_name'].'</td>';
															echo '<td>'.round($total).'%</td>';
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
					                    	$query = "SELECT contestant_name,(total_casual + total_prod + total_swim) AS total_eval
											FROM
											(
											SELECT contestant.contestant_name,(best_in_casual.suitability + best_in_casual.stage_presence + best_in_casual.uniqueness + best_in_casual.audience_impact *0.30) AS total_casual, 
											(best_in_prod.bearing + best_in_prod.stage_presence + best_in_prod.project_execution + best_in_prod.audience_impact * 0.20) AS total_prod,
											(best_in_swim.body_figure + best_in_swim.confidence_style + best_in_swim.stage_presence + best_in_swim.over_all * 0.50) AS total_swim
											 FROM contestant
											LEFT JOIN best_in_prod ON best_in_prod.contestant = contestant.contestant_name
											LEFT JOIN best_in_swim ON best_in_swim.contestant = contestant.contestant_name
											LEFT JOIN best_in_casual ON best_in_casual.contestant = contestant.contestant_name
											WHERE contestant.gender = 'female' AND best_in_casual.suitability != '' AND best_in_prod.bearing != '' AND best_in_swim.body_figure != ''
											GROUP BY contestant.contestant_name
											) AS J ORDER BY total_eval DESC LIMIT 4";
											$stmt = $conn->prepare($query);
											$stmt->execute();
											if ($stmt->rowCount() > 0) {
												foreach($stmt->fetchALL() AS $j){
													$total_eval = $j['total_eval'];
													$total = (($total_eval / 300)*100);
													$c++;
													echo '<tr>';
														echo '<td>'.$c.'</td>';
														echo '<td>'.$j['contestant_name'].'</td>';
														echo '<td>'.round($total).'%</td>';
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
					                    	$query = "SELECT contestant_name,(total_casual + total_prod + total_long_gown) AS total_eval
											FROM
											(
											SELECT contestant.contestant_name,(best_in_casual.suitability + best_in_casual.stage_presence + best_in_casual.uniqueness + best_in_casual.audience_impact *0.30) AS total_casual, 
											(best_in_prod.bearing + best_in_prod.stage_presence + best_in_prod.project_execution + best_in_prod.audience_impact * 0.20) AS total_prod,
											(best_in_long_gown.elegance + best_in_long_gown.stage_presence + best_in_long_gown.projection_execution + best_in_long_gown.audience_impact * 0.50) AS total_long_gown
											 FROM contestant
											LEFT JOIN best_in_prod ON best_in_prod.contestant = contestant.contestant_name
											LEFT JOIN best_in_long_gown ON best_in_long_gown.contestant = contestant.contestant_name
											LEFT JOIN best_in_casual ON best_in_casual.contestant = contestant.contestant_name
											WHERE contestant.gender = 'gay' AND best_in_casual.suitability != '' AND best_in_prod.bearing != '' AND best_in_long_gown.elegance != ''
											GROUP BY contestant.contestant_name
											) AS J ORDER BY total_eval DESC LIMIT 4";
												$stmt = $conn->prepare($query);
												$stmt->execute();
												if ($stmt->rowCount() > 0) {
													foreach($stmt->fetchALL() AS $j){
														$total_eval = $j['total_eval'];
														$total = (($total_eval / 300)*100);
														$c++;
														echo '<tr>';
															echo '<td>'.$c.'</td>';
															echo '<td>'.$j['contestant_name'].'</td>';
															echo '<td>'.round($total).'%</td>';
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
