<?php
session_start();

include "../repositories/authors_repository.php";
include "../repositories/books_repository.php";

if (str_contains($_SERVER['HTTP_REFERER'], "managebtn=addbook")) {
  $adminid = $_SESSION['admin_id'];
  $authorid = select_author_id($_POST['author'])['id'];
  $title = $_POST['title'];
  $category = $_POST['category'];
  $publication_date = $_POST['pub_date'];
  $summary = $_POST['summary'];
  add_book_to_db($adminid, $authorid, $title, $category, $publication_date, $summary);
  header("location: ../../views/book_management.php?managebtn=addbook");
  die();
};

if (str_contains($_SERVER['HTTP_REFERER'], "modify_book_form")) {
  $bookid = $_POST['book_id'];
  $authorid = select_author_id($_POST['author'])['id'];
  $title = $_POST['title'];
  $category = $_POST['category'];
  $publication_date = $_POST['pub_date'];
  $summary = $_POST['summary'];
  update_book($bookid, $authorid, $title, $category, $publication_date, $summary);
  header("location: ../../views/book_management.php?managebtn=listaddedbook");
  die();
}
