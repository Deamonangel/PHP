<?php
$title = "formulaire";
require_once 'views/layout/header.php';
?>

<div class="container mt-4">
  <h1>Tag ta voiture chez nous mon rhey</h1>
  <form action="getForm.php" method="POST">
    <div class="form-group">
      <label for="nom">Nom de la voiture</label>
      <input type="text" class="form-control" id="nom" name="nom" aria-describedby="Aide_nom">
      <small id="Aide_nom" class="form-text text-muted">Entres le nom de la voiture</small>
    </div>
    <div class="form-group">
      <label for="annee_sortie">Année de sortie de la voiture</label>
      <input type="text" class="form-control" id="annee_sortie" name="annee_sortie" aria-describedby="Aide_annee">
      <small id="Aide_annee" class="form-text text-muted">Entres l'année de sortie de la voiture</small>
    </div>
    <div class="form-group">
      <label for="nb_km">Nombre de kilometre</label>
      <input type="text" class="form-control" id="nb_km" name="nb_km" aria-describedby="Aide_km">
      <small id="Aide_km" class="form-text text-muted">Entrez le nombre de kilometre</small>
    </div>
      <div class="form-group">
          <label for="prix">Prix de la voiture</label>
          <input type="text" class="form-control" id="prix" name="prix" aria-describedby="Aide_prix">
          <small id="Aide_prix" class="form-text text-muted">Entrez le prix</small>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php require_once 'views/layout/footer.php'; ?>