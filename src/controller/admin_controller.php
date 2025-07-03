<?php

include "../repositories/admin_repository.php";
session_start();

if (str_contains($_SERVER['HTTP_REFERER'], "admin_login_page")) {
  $email = $_POST['mail'];
  $password = $_POST['password'];
  $existing = login_user($email, $password);
  if ($existing !== false) {
    $_SESSION['admin_logged'] = htmlentities($_POST['mail']);
    $_SESSION['admin_id'] = get_user_by_session_mail($email)['id'];
    $_SESSION['admin_lastname'] = get_user_by_session_mail($email)['lastname'];
    $_SESSION['admin_firstname'] = get_user_by_session_mail($email)['firstname'];
    header("location:../../views/book_management.php");
    die();
  } else {
    header("location:../../index.php");
    die();
  };
};
