<?php
/*
    | |
    | |     | || |                   | || |     | |  | | | | | | | | |     | || |               | |  
    | |     | | | |                 | | | |     | |                        | | | |              | |  
    | |     | |  | |               | |  | |     | |                        | |  | |             | |  
    | |     | |   | |             | |   | |     | |                        | |   | |            | |  
| | | |     | |    | |           | |    | |     | |                        | |    | |           | |  
| | | |     | |     | |         | |     | |     | |                        | |     | |          | |  
| | | |     | |      | |       | |      | |     | |  | | | | | | |         | |      | |         | |  
| |         | |       | |     | |       | |     | |                        | |       | |        | |  
| |         | |        | |   | |        | |     | |                        | |        | |       | |  
| | | |     | |         | | | |         | |     | |                        | |         | |      | |  
| | | |     | |           | |           | |     | |                        | |          | |     | |  
| | | |     | |                         | |     | |                        | |           | |    | |  
    | |     | |                         | |     | |                        | |            | |   | |  
    | |     | |                         | |     | |                        | |             | |  | |
    | |     | |                         | |     | |                        | |              | | | |
    | |     | |                         | |     | |                        | |               | || |

    DO NOT TOUCH ANYTHING UNLESS YOU KNOW WHAT YOU ARE DOING
*/

// FRAMEWORK ERROR
function framework_error($msg) {
	// GLOBAL VARIABLE
	global $debug;
	// FRAMEWORK ERROR
	if(!$debug) {
		echo "<br><b>FRAMEWORK ERROR</b> syntax error, '$msg' library function used in this page";
		die();
	}
}

// OPEN SESSION
function session_open($id, $role, $username) {
	// ERROR OVERRIDE IF NULL
	if($id != null && $role != null) {
		//require_once LOGOUT;
		// STORE TEMPORARY SESSION VARIABLE
		$_SESSION['login'] = true;
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;
	}
	else {
		framework_error(__FUNCTION__);
	}
}

// SYSTEM STATISTICS
function statistics() {
	if(STATISTICS) {
        // VARIABLE NEEDED
        global $test_load, $session_login;

		// ERROR REPORTING
		error_reporting(E_ALL);

		// MFN TEST CALCULATION
		$execution_time = round((explode(' ', microtime())[0] + explode(' ', microtime())[1]) - $test_load, 4);
		$memory_virtual_usage = memory_get_usage()/1024/1024;
		$memory_notreal_usage = memory_get_peak_usage(false)/1024/1024;
		$memory_real_usage = memory_get_peak_usage(true)/1024/1024;
		$session_status = 'false';

		// SESSION CHECK
		if($session_login === true) {
			$session_status = 'true';
		} 

		// STATISTICS DISPLAY
		echo "<hr>";
		echo "Framework Memory Usage: $memory_virtual_usage mib<br>";
		echo "+Script Memory Usage: $memory_notreal_usage mib<br>";
		echo "Engine Memory Allocated: $memory_real_usage mib<br>";
		echo "Execution Time:  $execution_time sec<br>";
		echo "Session Status: $session_status<br>";
		echo "Framework Version: ".FRAMEWORK_VERSION;
	}
}


// CONNECT TO SERVER HOST WITH DATABASE
function connect() {
	// TRY TO CONNECT TO SERVER HOST WITH DATABASE
	$conn = mysqli_connect(DATABASE['host'], DATABASE['user'], DATABASE['password'], DATABASE['name']);
	
	// REDIRECT IF FAILS
	if(!$conn) {
		//exit();
		header ('Location: '.DB_ERROR);
	}
	
	return $conn;
}