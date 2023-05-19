<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'best_in_prod_eval') {
	$contestant = $_POST['contestant'];
	$bearing = $_POST['bearing'];
	$stage_presence = $_POST['stage_presence'];
	$project_execution = $_POST['project_execution'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM best_in_prod WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO best_in_prod(`contestant`, `bearing`, `stage_presence`, `project_execution`, `audience_impact`, `judge`)VALUES('$contestant', '$bearing', '$stage_presence','$project_execution','$audience_impact','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'fetch_contestant_eval') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM best_in_prod WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['bearing'].'~!~'.$j['stage_presence'].'~!~'.$j['project_execution'].'~!~'.$j['audience_impact'];
		}
	}
	echo '';
}

if ($method == 'update_best_in_prod_eval') {
	$contestant = $_POST['contestant'];
	$bearing = $_POST['bearing'];
	$stage_presence = $_POST['stage_presence'];
	$project_execution = $_POST['project_execution'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "UPDATE best_in_prod SET bearing = '$bearing', stage_presence = '$stage_presence', project_execution = '$project_execution', audience_impact = '$audience_impact' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_contestant_eval_casual') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM best_in_casual WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['suitability'].'~!~'.$j['stage_presence'].'~!~'.$j['uniqueness'].'~!~'.$j['audience_impact'];
		}
	}
	echo '';
}

if ($method == 'best_in_casual') {
	$contestant = $_POST['contestant'];
	$suitability = $_POST['suitability'];
	$stage_presence = $_POST['stage_presence'];
	$uniqueness = $_POST['uniqueness'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM best_in_casual WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO best_in_casual (`contestant`, `suitability`, `stage_presence`, `uniqueness`, `audience_impact`, `judge`) VALUES ('$contestant','$suitability','$stage_presence','$uniqueness','$audience_impact','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_best_in_casual_eval') {
	$contestant = $_POST['contestant'];
	$suitability = $_POST['suitability'];
	$stage_presence = $_POST['stage_presence'];
	$uniqueness = $_POST['uniqueness'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "UPDATE best_in_casual SET suitability = '$suitability', stage_presence = '$stage_presence', uniqueness = '$uniqueness', audience_impact = '$audience_impact' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_contestant_eval_ramp') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM best_in_ramp WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['poise'].'~!~'.$j['stage_presence'].'~!~'.$j['ramp_skills'].'~!~'.$j['audience_impact'];
		}
	}
	echo '';
}

if ($method == 'best_in_ramp') {
	$contestant = $_POST['contestant'];
	$poise = $_POST['poise'];
	$stage_presence = $_POST['stage_presence'];
	$ramp_skills = $_POST['ramp_skills'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM best_in_ramp WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO best_in_ramp (`contestant`, `poise`, `stage_presence`, `ramp_skills`, `audience_impact`, `judge`) VALUES ('$contestant','$poise','$stage_presence','$ramp_skills','$audience_impact','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_best_in_ramp_eval') {
	$contestant = $_POST['contestant'];
	$poise = $_POST['poise'];
	$stage_presence = $_POST['stage_presence'];
	$ramp_skills = $_POST['ramp_skills'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "UPDATE best_in_ramp SET poise = '$poise', stage_presence = '$stage_presence', ramp_skills = '$ramp_skills', audience_impact = '$audience_impact' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_contestant_eval_swim') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM best_in_swim WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['body_figure'].'~!~'.$j['confidence_style'].'~!~'.$j['stage_presence'].'~!~'.$j['over_all'];
		}
	}
	echo '';
}

if ($method == 'best_in_swim') {
	$contestant = $_POST['contestant'];
	$body = $_POST['body'];
	$confidence = $_POST['confidence'];
	$stage_presence = $_POST['stage_presence'];
	$overall = $_POST['overall'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM best_in_swim WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO best_in_swim (`contestant`, `body_figure`, `confidence_style`, `stage_presence`, `over_all`, `judge`) VALUES ('$contestant','$body','$confidence','$stage_presence','$overall','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_best_in_swim_eval') {
	$contestant = $_POST['contestant'];
	$body = $_POST['body'];
	$confidence = $_POST['confidence'];
	$stage_presence = $_POST['stage_presence'];
	$overall = $_POST['overall'];
	$judge = $_POST['judge'];

	$query = "UPDATE best_in_swim SET body_figure = '$body', confidence_style = '$confidence', stage_presence = '$stage_presence', over_all = '$overall' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_contestant_eval_gown') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM best_in_long_gown WHERE contestant = '$contestant' AND judge = '$judge'";
	
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['elegance'].'~!~'.$j['stage_presence'].'~!~'.$j['projection_execution'].'~!~'.$j['audience_impact'];
		}
	}
	echo '';
}

if ($method == 'best_in_gown') {
	$contestant = $_POST['contestant'];
	$elegance = $_POST['elegance'];
	$stage_presence = $_POST['stage_presence'];
	$project = $_POST['project'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM best_in_long_gown WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO best_in_long_gown (`contestant`, `elegance`, `stage_presence`, `projection_execution`, `audience_impact`, `judge`) VALUES ('$contestant','$elegance','$stage_presence','$project','$audience_impact','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_best_in_gown_eval') {
	$contestant = $_POST['contestant'];
	$elegance = $_POST['elegance'];
	$stage_presence = $_POST['stage_presence'];
	$project = $_POST['project'];
	$audience_impact = $_POST['audience_impact'];
	$judge = $_POST['judge'];

	$query = "UPDATE best_in_long_gown SET elegance = '$elegance', stage_presence = '$stage_presence', projection_execution = '$project', audience_impact = '$audience_impact' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_contestant_eval_mr_miss_smile') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM mr_miss_smile WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['capturing_smile'].'~!~'.$j['confidence'].'~!~'.$j['projection'];
		}
	}
	echo '';
}

if ($method == 'best_in_mr_miss') {
	$contestant = $_POST['contestant'];
	$capturing = $_POST['capturing'];
	$confidence = $_POST['confidence'];
	$projection = $_POST['projection'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM mr_miss_smile WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO mr_miss_smile (`contestant`, `capturing_smile`, `confidence`, `projection`, `judge`) VALUES ('$contestant','$capturing','$confidence','$projection','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_best_in_smile_eval') {
	$contestant = $_POST['contestant'];
	$capturing = $_POST['capturing'];
	$confidence = $_POST['confidence'];
	$projection = $_POST['projection'];
	$judge = $_POST['judge'];

	$query = "UPDATE mr_miss_smile SET capturing_smile = '$capturing', confidence = '$confidence', projection = '$projection' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_contestant_eval_final') {
	$contestant = $_POST['contestant'];
	$judge = $_POST['judge'];
	$query = "SELECT * FROM final_round WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo $j['intelligence'].'~!~'.$j['beauty'];
		}
	}
	echo '';
}

if ($method == 'final_round') {
	$contestant = $_POST['contestant'];
	$intelligence = $_POST['intelligence'];
	$beauty = $_POST['beauty'];
	$judge = $_POST['judge'];

	$query = "SELECT id FROM final_round WHERE contestant = '$contestant' AND judge = '$judge'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'already';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO final_round (`contestant`, `intelligence`, `beauty`, `judge`) VALUES ('$contestant','$intelligence','$beauty','$judge')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_final_round') {
	$contestant = $_POST['contestant'];
	$intelligence = $_POST['intelligence'];
	$beauty = $_POST['beauty'];
	$judge = $_POST['judge'];

	$query = "UPDATE final_round SET intelligence = '$intelligence', beauty = '$beauty' WHERE contestant = '$contestant'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'register_contestant_admin') {
	$contestant = $_POST['contestant'];
	$gender = $_POST['gender'];
}

$conn = NULL;
?>