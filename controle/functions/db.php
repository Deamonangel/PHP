<?php

function getPdo(): PDO
{
  try {
    $pdo = new PDO(
      "mysql:host=localhost;dbname=voiture",
      "voiture",
      "f6o8z9Fnc2BUtY0J"
    );
    return $pdo;
  } catch(PDOException $ex) {
    exit("Nous vous informons que la base de donnée est indisponible")/*A changé pour une recherche null*/;
  }
}