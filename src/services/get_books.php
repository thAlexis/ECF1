<?php

include __DIR__ . "/../repositories/books_repository.php";

function display_books()
{
  $adminid = $_SESSION['admin_id'];
  $books = select_book_by_adminid($adminid);
  foreach ($books as $book) {
    echo "<li> Vous avez ajouté <strong>" . $book['title'] . "</strong> écrit par <strong>" . $book['full_name'] . "</strong> dans le genre <strong>" . $book['category'] . "</strong> et publié en <strong>" . $book['publication_date'] . "</strong></li>";
  };
}
