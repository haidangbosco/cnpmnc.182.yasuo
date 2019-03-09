<?php
session_start();
include 'action.php';

if (isset($_POST['submit'])){

	$name = $_POST['book_name'];
	$author = $_POST['author'];
	$type = $_POST['category'];
	$img = $_POST['imgInpT'];
	$year = $_POST['year'];
	$userId = $_SESSION['user_data']['id'];

	$data = array(
		"name"=> $name,
		"image"=>$img,
		"author"=>$author,
		"status"=>1,
		"type"=>$type,
		"year"=>$year,
		"rating"=>0,
		"user_id"=>$userId
	);
	$obj->insert_record("books",$data);
	header("location: userprofile.php");
}else{
	header("Location: index.php");
}
?>