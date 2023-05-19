<?php 
include 'conn.php';
$method = $_POST['method'];

if ($method == 'fetch_top4_mr') {
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
			echo '<td style="text-align:center; color:red;" colspan="3">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'fetch_top4_ms') {
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
			echo '<td style="text-align:center; color:red;" colspan="3">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'fetch_top4_gay') {
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
			echo '<td style="text-align:center; color:red;" colspan = "3">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_prod_top1_mr') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_prod.bearing + best_in_prod.stage_presence + best_in_prod.project_execution + best_in_prod.audience_impact) AS total_best_prod_mr FROM contestant LEFT JOIN best_in_prod ON best_in_prod.contestant = contestant.contestant_name WHERE contestant.gender = 'male' AND best_in_prod.bearing != '' GROUP BY contestant.contestant_name ORDER BY total_best_prod_mr DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_prod_mr'].' %</td>';
				echo '</tr>';
		
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_prod_top1_ms') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_prod.bearing + best_in_prod.stage_presence + best_in_prod.project_execution + best_in_prod.audience_impact) AS total_best_prod_ms FROM contestant LEFT JOIN best_in_prod ON best_in_prod.contestant = contestant.contestant_name WHERE contestant.gender = 'female' AND best_in_prod.bearing != '' GROUP BY contestant.contestant_name ORDER BY total_best_prod_ms DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_prod_ms'].' %</td>';
				echo '</tr>';
		
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_prod_top1_gay') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_prod.bearing + best_in_prod.stage_presence + best_in_prod.project_execution + best_in_prod.audience_impact) AS total_best_prod_gay FROM contestant LEFT JOIN best_in_prod ON best_in_prod.contestant = contestant.contestant_name WHERE contestant.gender = 'gay' AND best_in_prod.bearing != '' GROUP BY contestant.contestant_name ORDER BY total_best_prod_gay DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_prod_gay'].' %</td>';
				echo '</tr>';	
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_casual_top1_mr') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_casual.suitability + best_in_casual.stage_presence + best_in_casual.uniqueness + best_in_casual.audience_impact) AS total_best_casual_mr FROM contestant LEFT JOIN best_in_casual ON best_in_casual.contestant = contestant.contestant_name WHERE contestant.gender = 'male' AND best_in_casual.suitability != '' GROUP BY contestant.contestant_name ORDER BY total_best_casual_mr DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_casual_mr'].' %</td>';
				echo '</tr>';	
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_casual_top1_ms') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_casual.suitability + best_in_casual.stage_presence + best_in_casual.uniqueness + best_in_casual.audience_impact) AS total_best_casual_ms FROM contestant LEFT JOIN best_in_casual ON best_in_casual.contestant = contestant.contestant_name WHERE contestant.gender = 'female' AND best_in_casual.suitability != '' GROUP BY contestant.contestant_name ORDER BY total_best_casual_ms DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_casual_ms'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_casual_top1_gay') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_casual.suitability + best_in_casual.stage_presence + best_in_casual.uniqueness + best_in_casual.audience_impact) AS total_best_casual_gay FROM contestant LEFT JOIN best_in_casual ON best_in_casual.contestant = contestant.contestant_name WHERE contestant.gender = 'gay' AND best_in_casual.suitability != '' GROUP BY contestant.contestant_name ORDER BY total_best_casual_gay DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_casual_gay'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_ramp_top1_mr') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_ramp.poise + best_in_ramp.stage_presence + best_in_ramp.ramp_skills + best_in_ramp.audience_impact) AS total_best_ramp_mr FROM contestant LEFT JOIN best_in_ramp ON best_in_ramp.contestant = contestant.contestant_name WHERE contestant.gender = 'male' AND best_in_ramp.poise != '' GROUP BY contestant.contestant_name ORDER BY total_best_ramp_mr DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_ramp_mr'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_ramp_top1_ms') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_ramp.poise + best_in_ramp.stage_presence + best_in_ramp.ramp_skills + best_in_ramp.audience_impact) AS total_best_ramp_ms FROM contestant LEFT JOIN best_in_ramp ON best_in_ramp.contestant = contestant.contestant_name WHERE contestant.gender = 'female' AND best_in_ramp.poise != '' GROUP BY contestant.contestant_name ORDER BY total_best_ramp_ms DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_ramp_ms'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_ramp_top1_gay') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_ramp.poise + best_in_ramp.stage_presence + best_in_ramp.ramp_skills + best_in_ramp.audience_impact) AS total_best_ramp_gay FROM contestant LEFT JOIN best_in_ramp ON best_in_ramp.contestant = contestant.contestant_name WHERE contestant.gender = 'gay' AND best_in_ramp.poise != '' GROUP BY contestant.contestant_name ORDER BY total_best_ramp_gay DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_ramp_gay'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_swim_top1_mr') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_swim.body_figure + best_in_swim.confidence_style + best_in_swim.stage_presence + best_in_swim.over_all) AS total_best_swim_mr FROM contestant LEFT JOIN best_in_swim ON best_in_swim.contestant = contestant.contestant_name WHERE contestant.gender = 'male' AND best_in_swim.body_figure != '' GROUP BY contestant.contestant_name ORDER BY total_best_swim_mr DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_swim_mr'].' %</td>';
				echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_swim_top1_ms') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_swim.body_figure + best_in_swim.confidence_style + best_in_swim.stage_presence + best_in_swim.over_all) AS total_best_swim_ms FROM contestant LEFT JOIN best_in_swim ON best_in_swim.contestant = contestant.contestant_name WHERE contestant.gender = 'female' AND best_in_swim.body_figure != '' GROUP BY contestant.contestant_name ORDER BY total_best_swim_ms DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_swim_ms'].' %</td>';
				echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_long_gown_top1') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (best_in_long_gown.elegance + best_in_long_gown.stage_presence + best_in_long_gown.projection_execution + best_in_long_gown.audience_impact) AS total_best_in_long_gown FROM contestant LEFT JOIN best_in_long_gown ON best_in_long_gown.contestant = contestant.contestant_name WHERE contestant.gender = 'gay' AND best_in_long_gown.elegance != '' GROUP BY contestant.contestant_name ORDER BY total_best_in_long_gown DESC LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['total_best_in_long_gown'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'best_in_smile_mr_top1') {
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
}

if ($method == 'best_in_smile_ms_top1') {
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
}

if ($method == 'best_in_smile_gay_top1') {
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
}

if ($method == 'final_top4mr') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (final_round.intelligence + final_round.beauty) AS top_4_final_mr FROM contestant LEFT JOIN final_round ON final_round.contestant = contestant.contestant_name WHERE contestant.gender = 'male' AND final_round.intelligence != '' AND final_round.beauty != '' GROUP BY contestant.contestant_name ORDER BY top_4_final_mr DESC LIMIT 4";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['top_4_final_mr'].' %</td>';
				echo '</tr>';
					}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'final_top4ms') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (final_round.intelligence + final_round.beauty) AS top_4_final_ms FROM contestant LEFT JOIN final_round ON final_round.contestant = contestant.contestant_name WHERE contestant.gender = 'female' AND final_round.intelligence != '' AND final_round.beauty != '' GROUP BY contestant.contestant_name ORDER BY top_4_final_ms DESC LIMIT 4";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['top_4_final_ms'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'final_top4gay') {
	$c = 0;
	$query = "SELECT contestant.contestant_name, (final_round.intelligence + final_round.beauty) AS top_4_final_gay FROM contestant LEFT JOIN final_round ON final_round.contestant = contestant.contestant_name WHERE contestant.gender = 'gay' AND final_round.intelligence != '' AND final_round.beauty != '' GROUP BY contestant.contestant_name ORDER BY top_4_final_gay DESC LIMIT 4";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$top_4_final_gay = $j['top_4_final_gay'];
			$c++;
				echo '<tr>';
					echo '<td>'.$c.'</td>';
					echo '<td>'.$j['contestant_name'].'</td>';
					echo '<td>'.$j['top_4_final_gay'].' %</td>';
				echo '</tr>';
			
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'register_contestant_admin') {
	$contestant = $_POST['contestant'];
	$gender = $_POST['gender'];

	$query = "SELECT id FROM contestant WHERE contestant_name = '$contestant'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'duplicate';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO contestant(`contestant_name`,`gender`)VALUES('$contestant','$gender')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}

}

if ($method == 'fetch_contestant_admin') {
	$contestant = $_POST['contestant'];
	$gender = $_POST['gender'];
	$c = 0;

	$query = "SELECT * FROM contestant WHERE contestant_name LIKE '$contestant%' AND gender LIKE '$gender%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_contestant" onclick="get_contestant_details(&quot;'.$j['id'].'~!~'.$j['contestant_name'].'~!~'.$j['gender'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['contestant_name'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="text-align:center; color:red;">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'update_contestant_admin') {
	$id = $_POST['id'];
	$contestant = $_POST['contestant'];
	$gender = $_POST['gender'];

	$query = "UPDATE contestant SET contestant_name = '$contestant', gender = '$gender' WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>