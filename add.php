<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>How to Add WYSIWYG Text Editor</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px">How to Add WYSIWYG Text Editor</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-sm-8">
			<?php
				if(isset($_SESSION['error'])){
					echo "
						<div class='alert alert-danger text-center'>
							".$_SESSION['error']."
						</div>
					";
					unset($_SESSION['error']);
				}

			?>
			<form method="POST" action="post.php">
				<div class="form-group">
					<input type="text" id="title" name="title" class="form-control" placeholder="input title">
				</div>
				<div class="form-group">
					<textarea id="content" name="content" class="form-control" rows="10"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Submit</button> <a href="index.php" class="btn btn-dark">Back</a>
			</form>
		</div>
	</div>
</div>

<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
	    selector: '#content'
	});
</script>
</body>
</html>