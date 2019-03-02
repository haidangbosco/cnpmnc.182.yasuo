<?php
   
    include('./action.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>List of Books</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
            $myrow = $obj->fetch_record("books");
            foreach ($myrow as $row) {
               
?>
	<div class="container border">
		<div class="row">
		<img class="image col-3" src="<?php echo $row['image']; ?>">
		<div class="col-9">
			<span class="h4">  <?php  echo $row["name"];?>  </span>
			<div class="row">
				<p class="col-10"> <?php echo $row['description']; ?></p>
				<div class="col-2">
					<div class="btn btn-success">Available</div>
				</div>
			</div>
			<div class="row">
				<span class="col-6">tagia  <?php $author = $obj->select_record('users',array("id"=>$row['user_id'],)) ;  echo $author['fullname'];?></span>
				<span class="col-6">6.7/10</span>
			</div>
		</div>
		</div>
	</div>
						<?php } ?>
</body>
</html>