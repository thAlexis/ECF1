<?php

include __DIR__ . "/../repositories/books_repository.php";

function display_books()
{
  $adminid = $_SESSION['admin_id'];
  $books = select_book_by_adminid($adminid);
  foreach ($books as $book) {
    echo "<li> Vous avez ajouté <strong>" . $book['title'] . "</strong> écrit par <strong>" . $book['full_name'] . "</strong> dans le genre <strong>" . $book['category'] . "</strong> et publié en <strong>" . $book['publication_date'] . "</strong>. Voulez vous le <a class='underline' href='./modify_book_form.php?id=" . $book['id'] . "&title=" . $book['title'] . "&category=" . $book['category'] . "&pub_date=" . $book['publication_date'] . "&author=" . $book['full_name'] . "'>Modifier</a> ou le <a class='underline' href=''>Supprimer</a> ?</li>";
  };
}
