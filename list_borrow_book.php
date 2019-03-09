<div class="pb-3">
    <h3>Sách đã mượn: </h3>
    <?php
    foreach ($books as $book) {    ?>
    <div class="card mr-3" style="width: 15rem; float: left">
        <img class="card-img-top" src="https://via.placeholder.com/150x150" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $book['name']; ?></h5>
            <p class="card-text">ngay dang: <?php echo $book['create_at'] ?></p>
            <a href="#" class="btn btn-primary">Xem thông tin</a>
        </div>
    </div>
    
    <?php }?>
    <div style="clear: both"></div>
</div>