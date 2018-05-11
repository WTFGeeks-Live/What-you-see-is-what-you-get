<?php
	//get the id
	$id = $_GET['id'];

	//get the row with the id
	$conn = new mysqli('localhost', 'sumedhgpb', '', 'c912');
	$sql = "SELECT * FROM posts WHERE id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WYSIWYG Text Editor</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px">WYSIWYG Text Editor</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-sm-12">
			<h4><b>TITLE</b>: <?php echo $row['title']; ?></h4>
			<?php echo $row['post_text']; ?>
		</div>
	</div>
</div>

</body>
</html>