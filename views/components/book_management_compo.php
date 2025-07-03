<?php
if (isset($_GET['managebtn']) && $_GET['managebtn'] == "listaddedbook") : ?>

<?php elseif (isset($_GET['managebtn']) && $_GET['managebtn'] == "addbook") : ?>
  <form class="flex flex-col" method="post">
    <label for="title">Titre du livre</label>
    <input class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm" type="text" id="title" name="title" />
    <label class="mt-[1.5rem]" for="category">Categorie</label>
    <select class="outline-[0.2rem] outline-[#803642] rounded-sm mt-[0.2rem]" id="category" name="category">
      <option disabled selected>Selectionnez une catégorie</option>
      <option value="thriller">Thriller</option>
      <option value="fantasy">Fantasy</option>
      <option value="romance">Romance</option>
    </select>
    <label class="mt-[1.5rem]" for="pub_date">Date de publication</label>
    <input class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm" type="text" id="pub_date" name="pub_date" />
    <label class="mt-[1.5rem]" for="author">Auteur</label>
    <select class="outline-[0.2rem] outline-[#803642] rounded-sm mt-[0.2rem]" id="author" name="author">
      <option disabled selected>Selectionnez un auteur</option>
      <option value="author1">auteur exemple 1</option>
    </select>
  </form>

<?php endif; ?>