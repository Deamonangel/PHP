<?php

require_once __DIR__ . '/functions/db.php';
//ajout du prix en automatique (require_once __DIR__ . '/prix.php';)qui calculera automatiquement le prix 
function insertVoiture(
  string $nom,
  string $annee_sortie,
  string $nb_km,
  string $prix,
  string $visible
) {
  $pdo = getPdo();

  $query = "INSERT INTO contact (nom, annee_sortie, nb_km, prix, visible) VALUES (:nom, :annee_sortie, :nb_km, :prix, :visible)";

  $stmt = $pdo->prepare($query);

  /*On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE*/
  return $stmt->execute([
    'nom' => $nom,
    'annee_sortie' => $annee_sortie,
    'nb_km' => $nb_km,
    'Prix' => $prix,
    'visible' => $visible,
  ]);//
}