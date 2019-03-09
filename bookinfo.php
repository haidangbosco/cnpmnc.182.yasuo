<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
	crossorigin="anonymous">
	<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
	<title>book deliverer</title>
</head>
<body>
	<div class="container border">
	<?php include 'header.php' ?>
	<?php 
		if(empty(isset($_GET['id']))){
			$id=$_SESSION['user_data']['id'];
			$book = $obj->select_record('books',array("id"=>$id,));
			$author = $obj->select_record('users',array("id"=>$book['user_id'],));
		}else{
			$id=$_GET['id'];
			$book = $obj->select_record('books',array("id"=>$id,));
			$author = $obj->select_record('users',array("id"=>$book['user_id'],));
		}
		//echo $book['name'];
	?>
	<div class="container p-1">
		<div class="row container">
			<div class="col-3">
				<img class="col-12" src="<?php echo $book['image'] ?>" alt="No image found">
			</div>
			<div class="row col-9">
				<div class="col-6 container">
					<span class="h1"><?php echo $book['name']; ?></span>
					<div><?php echo $book['rating']; ?>/10</div>
					<div class="h5"><?php echo $book['author']; ?></div>
				</div>
				<div class="col-6 container">
					<div><b>Category:</b> <?php echo $book['type']; ?></div>
						<div>Người đăng:<a href="./userprofile.php?id=<?php echo $author['id']?>"> <?php echo $author['fullname']; ?> </a></div>
					</div>
					<div class="row">
						<a href="./userprofile.php?id=<?php echo $author['id']?>"><button class="btn btn-success">Mượn</button></a>
					</div>
				</div>
			</div>
			<!-- Decription -->
			<div class="container">
				<div class="h2">Description</div>
				<p><?php echo $book['description']; ?></p>
			</div>
		</div>
		<?php include 'footer.php' ?>
	</div>
	<style type="text/css">
		#comments ul{
  		list-style-type: none;
		}
	</style>
</body>