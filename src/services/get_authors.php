<?php

include __DIR__ . "/../repositories/authors_repository.php";

function get_select_authors_names()
{
  $authors_names = select_authors_names();
  foreach ($authors_names as $author_name) {
    echo "<option value='" . $author_name['full_name'] . "'>" . $author_name['full_name'] . "</option>";
  };
};
