<?php
	include_once('conn.php');
	$studentID = $_GET['studentID'];
	
	$headers = apache_request_headers();
    
    if (!$headers) {
        $headers = http_get_request_headers();
    }

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET,POST');
	header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
	echo deleteStudent($studentID);
?>