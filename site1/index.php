<?php
require_once "./connect.php";

$main = $pdo->prepare("SELECT * FROM header");
$main->execute();
$result = $main->fetch(PDO::FETCH_OBJ);
?>




<?php require_once "public/contact.php"; ?>
      <div class="intro-section" style="background-image: url('images/<?php echo $result->filename ?>');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1><?php echo $result->name ?></h1>
            </div>
          </div>
        </div>
      </div>

<?php require_once "public/services.php"; ?>
<?php require_once "public/about.php"; ?>

 