<?php
	session_start();

	if(isset($_POST['submit'])){
		//connection
		$conn = new mysqli('localhost', 'sumedhgpb', '', 'c912');

		//get post values
		$title = $_POST['title'];
		$content = $_POST['content'];

		//insert post to database
		$sql = "INSERT INTO posts (title, post_text) VALUES ('$title', '$content')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Post added successfully';
			header('location: index.php');
		}
		else{
			$_SESSION['error'] = 'Cannot add post';
			header('location: add.php');
		}

	}
	else{
		$_SESSION['error'] = 'Please fill up post form first';
		header('location: index.php');
	}

	
?>