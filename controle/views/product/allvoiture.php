<div class="card col-4">
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $voiture['nom'];
      echo '<br>';
      echo 'annee de sortie du vehicule : ', $voiture['annee_sortie'];
      echo '<br>';
      echo 'nombre de kilometre : ', $voiture['nb_km'];
      echo '<br>';
      echo 'prix du vehicule : ', $voiture['prix'];
    ?>
    </h5>
    
  </div>
</div>