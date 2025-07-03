<?php
include "../src/services/get_authors.php";
session_start();
var_dump($_SESSION);
if (!isset($_SESSION['admin_logged'])) {
  header("location: ./admin_login_page.php");
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "../src/dependencies/dependencies.php" ?>
  <title>Modifier un livre</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <div class="flex justify-center mt-[3rem]">
    <form class="flex flex-col" method="get" action="../src/controller/books_controller.php">
      <label for="title">Titre du livre</label>
      <input class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm" type="text" id="title" name="title" value="<?= $_GET['title'] ?>" />
      <label class="mt-[1.5rem]" for="category">Categorie</label>
      <select class="outline-[0.2rem] outline-[#803642] rounded-sm mt-[0.2rem]" id="category" name="category">
        <option selected value="<?= $_GET['category'] ?>"><?= $_GET['category'] ?></option>
        <option value="thriller">Thriller</option>
        <option value="fantasy">Fantasy</option>
        <option value="romance">Romance</option>
      </select>
      <label class="mt-[1.5rem]" for="pub_date">Date de publication</label>
      <input class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm" type="text" id="pub_date" name="pub_date" value="<?= $_GET['pub_date'] ?>" />
      <label class="mt-[1.5rem]" for="author">Auteur</label>
      <select class="outline-[0.2rem] outline-[#803642] rounded-sm mt-[0.2rem]" id="author" name="author">
        <option value="<?= $_GET['author'] ?>" selected><?= $_GET['author'] ?></option>
        <?php get_select_authors_names() ?>
      </select>
      <label class="mt-[1.5rem]" for="summary">Résumé</label>
      <input class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm h-[5rem]" type="text" id="summary" name="summary" />
      <button class="mt-[2rem] bg-[#803642] p-[0.3rem] w-[min-content self-center rounded-sm text-white cursor-pointer">Modifier</button>
    </form>
  </div>
</body>

</html>