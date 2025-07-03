<?php

include_once __DIR__ . "/../config/connection.php";

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

function select_author_id($authorname)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT id FROM authors WHERE full_name = :authorname";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":authorname", $authorname);
    $select_query->execute();
    return $select_query->fetch();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}
