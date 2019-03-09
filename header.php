<?php 
  session_start();
  include_once('./action.php');

  if (isset($_SESSION['user_data'])){
    $signed_in = true;
    $author = $obj->select_record('users',array("id"=>  $_SESSION['user_data']['id'],));
  }else{
    $signed_in = false;
  }
?>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="index.php">Book Exchange</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div style="padding-left: 60%">
  <?php
  if ($signed_in){
    echo '<a href="userprofile.php" class="h5" style="color:white" >Hello, '.$author['fullname'].'</a>';
    echo '<a href="signout.php" class="btn my-1 btn-outline-success">Log out</a>';
  }else{
    echo '<a href="signin.php" class="btn my-1 btn-outline-success">Log in</a>';
  }
  ?>
  </div>
</nav>