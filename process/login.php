<?php
 include 'conn.php';
 session_start();
 if (isset($_POST['login_btn'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];
    // $role = $_POST['role'];
    // $esection = $_POST['section'];
 	if (empty($username)) {
 		echo 'Please Enter Username';
 	}else if(empty($password)){
 		echo 'Please Enter Password';
 	}
    // else if(empty($esection)){
    //     echo 'Please Select Section';
    // }
    else{

 		$check = "SELECT id,role FROM user_accounts WHERE BINARY username = '$username' AND BINARY password = '$password'";
 		$stmt = $conn->prepare($check);
 		$stmt->execute();
 		if ($stmt->rowCount() > 0) {
 			foreach($stmt->fetchALL() as $x){
 				$role = $x['role'];
 			}
 			if($role == 'judge'){
 				$_SESSION['username'] = $username;
 				header('location: page/judge/dashboard.php');
 			}else if($role == 'admin'){
                $_SESSION['username'] = $username;
                header('location: page/admin/dashboard.php');    
            }
 		}else{
            echo '<script>alert("Wrong Username or Password !!!")</script>';
 		}
 	}
 }
 if (isset($_POST['Logout'])) {
 	session_unset();
 	session_destroy();
 	header('location: ../index.php');
 }


?>