
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
    <div class="row border mb-3 mx-2 p-2">
        <img class="image col-3" src="<?php echo $row['image']; ?>">
        <div class="col-9">
            <div class="h4"><a href="./bookinfo.php?id=<?php echo $row['id'] ?>"><?php  echo $row["name"];?> </a></div>
            <h5 class="mb-2">Tác giả: <?php echo $row['author']; ?></h5>
            <div class="mb-2">Người đăng:<a href="./userprofile.php?id=<?php $author = $obj->select_record('users',array("id"=>$row['user_id'],));
              echo $author['id']?>"> <?php echo $author['fullname']; ?> </a></div>
            <span class="bg-success"><?php $row['status']==1?'Avaiable':'Borrowed'?></span>
            <div class="row">
                <p class="col-10">Mô tả: <?php echo $row['description']; ?></p>
                <div class="col-2">
                    <button class="btn btn-default">Borrow</button>
                </div>
            </div>
        </div>
    </div>

<?php }?>
