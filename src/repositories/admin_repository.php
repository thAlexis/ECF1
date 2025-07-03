<?php

include __DIR__ . "/../config/connection.php";

function login_user($email, $password)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT * FROM admins WHERE email = :email AND password = :password";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":email", $email);
    $select_query->bindValue(":password", $password);
    $select_query->execute();
    $existing = $select_query->fetch();
    return $existing;
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  };
};

function get_user_by_session_mail($session_mail)
{
  try {
    $pdo = get_connection_to_db();
    $select = "SELECT * FROM admins WHERE email = :email";
    $select_query = $pdo->prepare($select);
    $select_query->bindValue(":email", $session_mail);
    $select_query->execute();
    return $select_query->fetch();
  } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la base de données." . $ex->getMessage();
  }
}
