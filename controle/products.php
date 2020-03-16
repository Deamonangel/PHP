<?php
$title = "Les produits";
require_once 'views/layout/header.php';
require_once 'functions/voiture.php';

$products = getVoiture();
?>

<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($products as $product) {
      require 'views/product/allvoiture.php';
    }
    ?>
  </div>
</div>

<?php require_once 'views/layout/footer.php'; ?>