<?php
$header_title = "mvc stagiaires";
$title = "liste des stagiaires";
//utiliser la fonction qui permettre de ranger le code html + php dans un seul variable créé par l'utilisateur pour le récupérer dans la page layout.php ;
ob_start();
?>
<a href="index.php?action=create" class="btn btn-primary">Ajouter Stagiaire</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>Age</th>
        <th>login</th>
        <th>password</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    <?php  foreach($stagiaires as $stg):?>
    <tr>
        <td><?= $stg->id?></td>
        <td><?= $stg->nom?></td>
        <td><?= $stg->prenom?></td>
        <td><?= $stg->age?></td>
        <td><?= $stg->login?></td>
        <td><?= $stg->password ?></td>
        <td>
            <a href="index.php?action=edit&id=<?=$stg->id ?>" class="btn btn-warning btn-sm">modifier</a>
            <a href="index.php?action=delete&id=<?=$stg->id ?>" class="btn btn-danger btn-sm">supprimer</a>
        </td>
    </tr>
    <?php
    // fin de boucle foreach
    endforeach;
    ?>
    </tbody>
</table>
<?php
//recupérer la veleur html + php avec la variable $content ;
$content =  ob_get_clean();?>

<?php
// l'appel de la page layout master
include_once"views/layout.php";
?>
