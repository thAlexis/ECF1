<?php
if (isset($_GET['managebtn']) && $_GET['managebtn'] == "listaddedbook") : ?>
  <div>
    <ul>
      <?php display_books() ?>
    </ul>

  </div>
<?php elseif (isset($_GET['managebtn']) && $_GET['managebtn'] == "addbook") : ?>
  <form class="flex flex-col" method="post" action="../src/controller/books_controller.php">
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
      <?php get_select_authors_names() ?>
    </select>
    <label class="mt-[1.5rem]" for="summary">Résumé</label>
    <input class="mt-[0.2rem] outline-[0.2rem] outline-[#803642] rounded-sm h-[5rem]" type="text" id="summary" name="summary" />
    <button class="mt-[2rem] bg-[#803642] p-[0.3rem] w-[min-content self-center rounded-sm text-white cursor-pointer">Ajouter</button>
  </form>

<?php endif; ?>