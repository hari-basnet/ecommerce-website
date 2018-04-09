<?php
$sql = "SELECT * FROM categories where parent=0";
$parentQuery = $db->query($sql);


 ?>
<div class="container" id="mainbody">
  <!--top header section-->
  
  <div class="container" id="topheader">
    <div id="logotext"></div>


  </div>

<!-- navigation menu  -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#" id="brandName">XYZ pasal</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <?php  while ($parent = mysqli_fetch_assoc($parentQuery)): ?>
      <?php
      $parent_id = $parent ['id'];
      $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
      $childQuery = $db->query($sql2);
      ?>

    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $parent['category'] ?> <span class="caret"></span></a>
      <ul class="dropdown-menu" role = "menu">
        <?php while ($child= mysqli_fetch_assoc($childQuery)): ?>
        <li><a href="#"><?php echo $child['category'] ?></a></li>
      <?php endwhile; ?>
      </ul>
    </li>
  <?php endwhile; ?>
  </ul>
  <!--search bar and submit button-->
  <form class="navbar-form navbar-left" action="/action_page.php">
   <div class="form-group">
     <input type="text" class="form-control" placeholder="Search our page...">
   </div>
   <button type="submit" class="btn btn-default">Search</button>
 </form>
 <!--signup and login button-->
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </ul>
</div>
</nav>
