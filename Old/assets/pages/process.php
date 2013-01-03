<?php
$action = secure($_GET['action']);

if($action == "application"){
	$do = secure($_GET['do']);
	
	if($do == "add"){
		$fname = secure($_POST['fname']);
		$lname = secure($_POST['lname']);
		$phone = secure($_POST['phone']);
		$email = secure($_POST['email']);

		if(empty($fname) OR empty($lname) OR empty($email)){
			set_error("*Fyll i alla fälten.");
			header('location: ?page=Ansökan');
		} else {
			if(empty($phone)){
				$phone = "Inget nummer";
			}

			$check = Check("email", $email);

			if($check == 0){
				$sql = "INSERT INTO applicants(fname, lname, phone, email)VALUES('$fname', '$lname', '$phone', '$email')";
				$add = mysql_query($sql);

				if($add){
					set_success("*Din anmälan har nu lagts till i databasen.");
					header('location: ?page=Ansökan');
				}
			} else {
				set_error("*Din email finns redan i databasen.");
				header('location: ?page=Ansökan');
			}
		}
	}
}
?>