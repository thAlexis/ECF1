<?php
session_start();
session_unset();
session_destroy();
session_start();
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "../src/dependencies/dependencies.php" ?>
  <title>Page de connexion pour administrateurs</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <div class="flex flex-col items-center mt-[3rem] ">
    <h2 class="text-black text-2xl">Connexion Administrateur</h2>
    <form class="bg-[#803642] text-white flex items-center p-[1rem] mt-[1rem] rounded-md" method="post" action="../src/controller/admin_controller.php">
      <label class="mr-[0.5rem]" for="mail">Email</label>
      <input class="bg-white rounded-sm text-black pr-[0.2rem] pl-[0.2rem] mr-[1rem]" type="email" id="mail" name="mail" />
      <label class="mr-[0.5rem]" for="password">Mot de passe</label>
      <input class="bg-white rounded-sm text-black pr-[0.2rem] pl-[0.2rem] mr-[1rem]" type="password" id="password" name="password" />
      <button class="bg-white text-black p-[0.2rem] rounded-sm cursor-pointer">Se connecter</button>
    </form>
  </div>
</body>

</html>