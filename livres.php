<?php
include('templates/header.php');
include('templates/nav.php');
require_once('Model/entity/Book.class.php');
require_once('Model/Book_manager.class.php');
?>


<?php
$book1 = new Book(1, "Dom Quichotte", "Miguel Cervantes", 1605, "Roman", "Disponible");
$book2 = new Book(2, "Voyage au bout de la nuit", "Louis-Ferdinand Céline", 1932, "Roman", "Indisponible");
$book3 = new Book(3, "Le Petit Prince", "Antoine de Saint-Exupéry", 1943, "Roman", "Disponible");
$book4 = new Book(4, "Les Fleurs du mal", "Charles Baudelaire", 1857, "Roman", "Disponible");

$bookManager = new Book_manager;
$bookManager-> addBook($book1);
$bookManager-> addBook($book2);
$bookManager-> addBook($book3);
$bookManager-> addBook($book4);

?>



<div class="container mt-3">
    <h1>Liste des livres</h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Ref</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Disponibilité</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>

            <?php 
            $books = $bookManager->getBooks();
            for ($i = 0; $i < count($books); $i++) : ?>
                <tr>
                    <th scope="row"><?= $books[$i]->getId() ?></th>
                    <td><?= $books[$i]->getTitle() ?></td>
                    <td><?= $books[$i]->getAuthor() ?></td>
                    <td><?= $books[$i]->getAvailablity() ?></td>
                    <td><a href="#" class="btn btn-warning">Modifier</a></td>
                    <td><a href="#" class="btn btn-danger">Supprimer</a></td>
                </tr>
            <?php endfor; ?>

        </tbody>
    </table>
    <a href="#" class="btn btn-success d-block">Ajouter</a>



</div>



<?php
include('templates/footer.php');