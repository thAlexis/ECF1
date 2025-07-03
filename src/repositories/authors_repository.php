<?php

include __DIR__ . "/../config/connection.php";

function select_authors_names()
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT full_name FROM authors";
    $select_query = $pdo->prepare($select);
    $select_query->execute();
    return $select_query->fetchAll();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
};
