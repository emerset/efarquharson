<?php

/*
 * Get Categories
 */
function getCategories(){
	$db = new Database();
	$db->query('SELECT * FROM `categories`');
	$results = $db->resultset();
	return $results;
}

/*
 * Get Projects
 */
function getProjects(){
	$db = new Database();
	$db->query('SELECT * FROM `projects`');
	$results = $db->resultset();
	return $results;
}

/*
 * Get Projects From Category
 */
function getProjectsFromCat($category_id){
	$db = new Database();
	$db->query('SELECT *
				FROM projects
				JOIN ');
	// http://stackoverflow.com/questions/1054299/sql-many-to-many-table-and-query
	// copy this example after populating DB to test
}

/*
 * Get Project by ID
 */
function getProject($project_id){
	$db = new Database();
	$db->query('SELECT *
				FROM projects
				WHERE id = :id');
	$db->bind(':id', $project_id);
	$result = $db->single();
	return $result;
}

/*
 * Get Examples by ID
 */
function returnProjectExamples($id1, $id2, $id3){
	$db = new Database();
	$db->query('SELECT *
				FROM projectexamples
				WHERE id = :id1 OR id = :id2 OR id = :id3');
	$db->bind(':id1', $id1);
	$db->bind(':id2', $id2);
	$db->bind(':id3', $id3);
	$results = $db->resultset();
	return $results;
}

/*
 * Get Examples by Project ID
 */
function getExamplesByProj($project_id){
	$db = new Database();
	$db->query('SELECT ex1_id, ex2_id, ex3_id
				FROM projects
				WHERE id = :id');
	$db->bind(':id', $project_id);
	$ex_ids = $db->single();
	$results = returnProjectExamples($ex_ids->ex1_id, $ex_ids->ex2_id, $ex_ids->ex3_id);
	return $results;
}
