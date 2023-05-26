<?php
/**
 * Library for common functions used across the backend
 */

require_once('./config.php');

// global variable to hold database connection
global $db;
$db = get_database();


/**
 * Connect to the database and provide a link
 */
function get_database() {
	try {
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

		if (!$link) {
			return null; // let the others handle the error
			//dieWithError('Could not connect: ' . mysqli_connect_errno());
		}

		mysqli_select_db($link, DB_NAME);

		return $link;
	} catch (Exception $e) {
		return null;
		//dieWithError('Could not connect to DB server: ' . $e->getMessage());
	}
}

/**
 * Close the database
 */
function close_db() {
	global $link;

	mysqli_close($link);
}


/**
 * Respond back to the front-end with a not-authorized (401)
 */
function deny($msg) {
	http_response_code(401);
    die('Unauthorized: ' . $msg);
}

/**
 * Stop processing and respond back to front-end with custom HTTP error
 */
function dieWithError($msg = '', $error = 500)
{
    http_response_code($error);
    die($msg);
}
