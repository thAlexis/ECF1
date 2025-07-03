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
  <title>Supprimer un livre</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <div class="flex justify-center mt-[3rem]">
    <form class="flex flex-col" method="post" action="../src/controller/books_controller.php">
      <label for="book_id"></label>
      <input hidden id="book_id" name="book_id" value="<?= $_GET['id'] ?>" />
      <label for="title">Titre du livre</label>
      <input readonly class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm" type="text" id="title" name="title" value="<?= $_GET['title'] ?>" />
      <label class="mt-[1.5rem]" for="category">Categorie</label>
      <select readonly class="outline-[0.2rem] outline-[#803642] rounded-sm mt-[0.2rem]" id="category" name="category">
        <option selected value="<?= $_GET['category'] ?>"><?= $_GET['category'] ?></option>
      </select>
      <label class="mt-[1.5rem]" for="pub_date">Date de publication</label>
      <input readonly class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm" type="text" id="pub_date" name="pub_date" value="<?= $_GET['pub_date'] ?>" />
      <label class="mt-[1.5rem]" for="author">Auteur</label>
      <select readonly class="outline-[0.2rem] outline-[#803642] rounded-sm mt-[0.2rem]" id="author" name="author">
        <option value="<?= $_GET['author'] ?>" selected><?= $_GET['author'] ?></option>
      </select>
      <button class="mt-[2rem] bg-red-700 p-[0.3rem] w-[min-content self-center rounded-sm text-white cursor-pointer">Supprimer</button>
    </form>
  </div>
</body>

</html>
</body>

</html>