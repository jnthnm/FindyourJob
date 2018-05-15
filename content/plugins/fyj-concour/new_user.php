<?php

header('content-type: application/json');

if (!empty($_POST)){

		global $wpdb;


		echo json_encode(['success' => 'ko', 'error_msg' => 'email already exist']);

} else {

	echo json_encode('nop');
}
