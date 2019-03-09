
<?php
   
    include('./action.php');


?>
<div class="p-3">
<h3>
    List Books
</h3>
<?php
        $myrow = $obj->fetch_record("books");
        foreach ($myrow as $row) {
?>
    <div class="row border mb-3 mx-2">
        <img class="image col-3" src="<?php echo $row['image']; ?>">
        <div class="col-9">
            <span class="h4"><a href=""><?php  echo $row["name"];?> </a></span>
            <span><?php $author = $obj->select_record('users',array("id"=>$row['user_id'],)) ;  echo $author['fullname'];?></span>
            <span class="bg-success"><?php $row['status']==1?'Avaiable':'Borrowed'?></span>
            <div class="row">
                <p class="col-10"> Abstraction: <?php echo $row['description']; ?></p>
                <div class="col-2">
                    <button class="btn btn-default">Borrow</button>
                </div>
            </div>
            <div class="row">
                <span class="col-6">Name of Provider</span>
                <span class="col-6"><?php echo $row['rating'] ?>/10</span>
            </div>
        </div>
    </div>

<?php }?>
