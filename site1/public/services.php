<?php
require_once "./connect.php";

$sql = $pdo->prepare("SELECT * FROM services");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_OBJ);

?>




<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
    
            <h3 style="color: black">Наши услуги</h3>
          </div>
        </div>
        <div class="row">

        <?php foreach($result as $val): ?>
          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="images/<?php print_r($result->filename) ?>" alt="Image" class="img-fluid">
               
              </figure>
              <div class="person-contents">
                <h3><?php print_r($result->title) ?></h3>
                <span style="color: red;font-weight: bold"><?php print_r($result->price) ?></span>
              </div>
            </div>
          </div>
<?php endforeach ?>

        </div>
      </div>
    </div>