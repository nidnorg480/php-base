<?php

/*
* On this file, we define some function who help us to manage global application.
*/

// Don't forget session...
session_start();

/**
 * We need to redirect user sometimes.
 */
function redirect($page)
{
	header('Location: '.$page);
}

/**
 * We need to redirect user sometimes.
 */
function httpNotFound()
{
	http_response_code(404);
	echo '<div class="container"><h1>404</h1></div>';
}

/**
 * We need to know if a form is submitted.
 */
function isSubmit()
{
	return !empty($_POST);
}

/**
 * We need to know if an email is valid.
 */
function isValidEmail($email)
{
	return false !== filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * We need to know if a date is valid.
 */
function isValidDate($date)
{
	preg_match('/(\d*)\-(\d*)\-(\d*)/', $date, $matches);

	if (empty($matches) || count($matches) !== 4) {
		return false;
	}

	$year = (int) $matches[1];
	$month = (int) $matches[2];
	$day = (int) $matches[3];

	if (
		$year < 1900 ||
		($month < 1 || $month > 12) ||
		($day < 1 || $day > 31)
	) {
		return false;
	}

	return $matches;
}

/**
 * We can check if an user is logged.
 */
function isLogged()
{
	return $_SESSION['user'] ?? false;
}
