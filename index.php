<?php
session_start();
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="./src/dependencies/output.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>ECF</title>
</head>

<body>
  <?php if (isset($_SESSION['admin_logged'])) : ?>
    <nav class="bg-[#803642] h-[4rem] text-white flex items-center justify-center pr-[0.8rem] pl-[0.8rem] shadow-md">
      <ul class="flex items-center justify-between w-[100%]">
        <li class="text-lg"><a href="./index.php">Find'Book</a></li>
        <li class="flex items-center gap-[1rem]">
          <p>Bonjour <?= $_SESSION['admin_firstname'] . " " . $_SESSION['admin_lastname'] ?></p>
          <a class="bg-white text-black p-[0.3rem] rounded-sm" href="./views/book_management.php">Gérer les livres</a>
          <a class="bg-white text-black p-[0.3rem] rounded-sm" href="./views/admin_login_page.php">Se déconnecter</a>
        </li>
      </ul>
    </nav>

  <?php else : ?>
    <nav class="bg-[#803642] h-[4rem] text-white flex items-center justify-center pr-[0.8rem] pl-[0.8rem] shadow-md">
      <ul class="flex justify-between w-[100%]">
        <li class="text-lg"><a href="./index.php">Find'Book</a></li>
        <li class=""><a class="bg-white text-black p-[0.3rem] rounded-sm" href="./views/admin_login_page.php">Connexion Administrateur</a></li>
      </ul>
    </nav>
  <?php endif ?>
  <h1 class="text-lg">Hello World!</h1>
</body>

</html>