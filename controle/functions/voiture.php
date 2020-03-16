<?php
//
//FICHIER TABLEAU DE VOITURE
//

require_once __DIR__ . "/functions/db.php";

function getVoiture(): array
{
  $pdo = getPdo();

  $stmt = $pdo->query("SELECT * FROM voiture WHERE visible=1");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}