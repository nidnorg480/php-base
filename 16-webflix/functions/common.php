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
