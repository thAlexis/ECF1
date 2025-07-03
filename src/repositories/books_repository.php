<?php

include_once __DIR__ . "/../config/connection.php";

function add_book_to_db($adminid, $authorid, $title, $category, $pub_date, $summary)
{
  try {
    $pdo = get_connection_to_db();
    $insert = "INSERT INTO books VALUES (NULL, :adminid, :authorid, :title, :category, :pub_date, :summary)";
    $insert_query = $pdo->prepare($insert);
    $insert_query->bindValue(":adminid", $adminid);
    $insert_query->bindValue(":authorid", $authorid);
    $insert_query->bindValue(":title", $title);
    $insert_query->bindValue(":category", $category);
    $insert_query->bindValue(":pub_date", $pub_date);
    $insert_query->bindValue(":summary", $summary);
    $insert_query->execute();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}
