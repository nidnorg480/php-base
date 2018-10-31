<?php

/**
 * We need to retrive categories from database.
 */
function getCategories()
{
	global $db;

	$query = $db->query('SELECT * FROM category');
	$categories = $query->fetchAll();

	return $categories;
}

/**
 * We need to retrive movies from database.
 * @param int $category_id A category id
 *
 * @return array
 */
function getMovies($category_id = null)
{
	global $db;

	$sql = 'SELECT * FROM movie';

	if (null !== $category_id) {
		$sql .= ' WHERE category_id = :category_id';
	}

	$query = $db->prepare($sql);
	$query->bindValue(':category_id', $category_id);
	$query->execute();
	$movies = $query->fetchAll();

	return $movies;
}

/**
 * Add a movie in database.
 */
function addMovie($title, $description, $video_link, $cover, $released_at, $category)
{
	global $db;

	$query = $db->prepare('
		INSERT INTO movie (title, description, video_link, cover, released_at, category_id)
		VALUES (:title, :description, :video_link, :cover, :released_at, :category_id)
	');
	$query->bindValue(':title', $title, PDO::PARAM_STR);
	$query->bindValue(':description', $description, PDO::PARAM_STR);
	$query->bindValue(':video_link', $video_link, PDO::PARAM_STR);
	$query->bindValue(':cover', $cover, PDO::PARAM_STR);
	$query->bindValue(':released_at', $released_at, PDO::PARAM_STR);
	$query->bindValue(':category_id', $category, PDO::PARAM_STR);

	return $query->execute();
}
