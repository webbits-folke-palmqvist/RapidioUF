<?php
include('database.php');

function secure($unsafe){
	$safe = mysql_real_escape_string($unsafe);
	return $safe;
}

function error() {
	if($_SESSION['error']){
		echo @$_SESSION['error'];
		unset_error();
	}
}

function unset_error() {
	unset($_SESSION['error']);
}

function set_error($error) {
	$_SESSION['error'] = $error;
}

function success() {
	if($_SESSION['success']){
		echo @$_SESSION['success'];
		unset_success();
	}
}

function set_success($success) {
	$_SESSION['success'] = $success;
}

function unset_success() {
	unset($_SESSION['success']);
}

function check($what, $value) {
	$result = mysql_query("SELECT * FROM applicants WHERE ".$what." = '$value'");
	$num_rows = mysql_num_rows($result);

	return $num_rows;
}
?>