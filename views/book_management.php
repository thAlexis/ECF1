<?php
include "../src/services/get_authors.php";
include "../src/services/get_books.php";
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
  <title>Document</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <div class="flex justify-center">
    <form class="flex gap-[5rem] mt-[5rem] text-white" method="get" action="./book_management.php">
      <button name="managebtn" value="listaddedbook" class="bg-[#803642] p-[0.5rem] rounded-sm cursor-pointer">Consulter mes livres ajoutés</button>
      <button name="managebtn" value="addbook" class="bg-[#803642] p-[0.5rem] rounded-sm cursor-pointer">Ajouter un nouveau livre</button>
      <button name="managebtn" value="manageauthors" class="bg-[#803642] p-[0.5rem] rounded-sm cursor-pointer">Gérer les auteurs</button>
    </form>
  </div>
  <div class="flex justify-center mt-[4rem]">
    <?php include "./components/book_management_compo.php" ?>
  </div>
</body>

</html>