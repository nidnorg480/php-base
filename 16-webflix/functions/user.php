<?php

/*
* On this file, we define some function who help us to manage user.
*/

/**
 * We need to know if an email exists in database.
 */
function emailExists($email)
{
	global $db;

	$query = $db->prepare('
		SELECT COUNT(id) FROM `user` WHERE email = :email
	');
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();

    return (int) $query->fetchColumn();
}

/**
 * We need to easily register an user in database.
 */
function registerUser($email, $password)
{
	global $db;

	$query = $db->prepare('
		INSERT INTO `user` (username, email, password) VALUES (:username, :email, :password)
	');
    $query->bindValue(':username', strtok($email, '@'), PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);

    return $query->execute();
}

/**
 * We need to easily login an user on application.
 */
function loginUser($email, $password)
{
	global $db;

	$query = $db->prepare('
		SELECT COUNT(id) FROM `user` WHERE email = :email AND password = :password
	');

	return true;
}
