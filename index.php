<?php
	// url: localhost/lynssenyacht/?IDBoot=33


	// get url for boot id
	$IDBoot = $_GET['IDBoot'];

	// parameter count = 5
	$Licht = false;
	$TempratuurBoot = 'C18';
	$Tank = '80%';
	$TempratuurMotor = 'C95';
	$BootActive = false;

	// array values
	$array = array('Licht' => $Licht, 'TempratuurBoot' => $TempratuurBoot, 'Tank' => $Tank, 'TempratuurMotor' => $TempratuurMotor, 'BootActive' => $BootActive);

	// gives acces to all
	header('Access-Control-Allow-Origin: *');
	// sets header to json type
	header('Content-type: application/json');

	// if the url has a get in it
	if($_GET != null){
		// if boot id = 33 print array
		if($IDBoot == '33'){
			echo json_encode(['Values' => $array]);
		}
	}

?>