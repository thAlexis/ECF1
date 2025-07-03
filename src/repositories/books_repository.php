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

function select_book_by_adminid($adminid)
{
  try {

    $pdo = get_connection_to_db();
    $select = "SELECT books.id, title, authors.full_name, category, publication_date, summary FROM books JOIN authors ON books.authorId = authors.id WHERE adminId = $adminid";
    $select_query = $pdo->prepare($select);
    $select_query->execute();
    return $select_query->fetchAll();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}

function get_book_id($book_title)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT id FROM books WHERE title = :book_title";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":book_title", $book_title);
    $select_query->execute();
    return $select_query->fetch();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}

function update_book($bookid, $authorid, $title, $category, $pub_date, $summary)
{
  try {
    $pdo = get_connection_to_db();
    $update = "UPDATE books SET authorId = :authorid, title = :title, category = :category, publication_date = :pub_date, summary = :summary WHERE id = :bookid";
    $update_query = $pdo->prepare($update);
    $update_query->bindValue(":bookid", $bookid);
    $update_query->bindValue(":authorid", $authorid);
    $update_query->bindValue(":title", $title);
    $update_query->bindValue(":category", $category);
    $update_query->bindValue(":pub_date", $pub_date);
    $update_query->bindValue(":summary", $summary);
    $update_query->execute();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
}
