<?php

(empty($_POST) ||
  empty($_POST['nom']) ||
  empty($_POST['annee_sortie']) ||
  empty($_POST['nb_km']) ||
  empty($_POST['prix'])) && exit("Requête invalide");

require_once 'functions/formulaire.php';
$title = "Enregistez-vous";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php if (insertVoiture($_POST['nom'], $_POST['annee_sortie'], $_POST['nb_km'], $_POST['prix'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci <?php echo $_POST['annee_sortie'] . ' ' . $_POST["nom"]; ?> ! Votre demande a bien été enregistrée
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre demande
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>