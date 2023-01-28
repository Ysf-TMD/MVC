<?php
$title ="suppression d'un stagiaires " ;
ob_start();

?>
<div class="container ">
    <p class="container bg-light w-75 rounded mx-auto h2 text-center p-5" >voullez vous vraiment supprimer le stagiaire</p>
    <div class="d-flex justify-content-center ">
        <a href="destroy.php?action=destroy&id=<?= $id?>" class="btn btn-danger mx-1">Valider</a>
        <a href="index.php?action=liste" class="btn  mx-1 btn-warning">Annuler</a>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once "views/layout.php";
