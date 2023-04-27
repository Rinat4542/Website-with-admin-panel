<?php
require_once "./connect.php";

$main = $pdo->prepare("SELECT * FROM text_about");
$main->execute();
$result = $main->fetch(PDO::FETCH_OBJ);
?>




<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/<?php echo $result->filename ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
      
            <h3 style="color: black"><?php echo $result->title ?></h3>
            <p><?php echo $result->discription ?></p>
            
          </div>
        </div>
      </div>
    </div>