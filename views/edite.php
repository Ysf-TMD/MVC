<?php
$header_title = "Modifier  Stagiaires";
$title="Modifier les informations Stagiaire";
ob_start();

?>

<form action="index.php?action=update" method="post" class="container w-25 mx-auto">
    <div class="form-group">

        <input type="hidden" name="id" id="" class="form-control" value="<?= $stagiaire->id?>">
    </div>
    <div class="form-group">
        <label for="">nom</label>
        <input type="text" name="nom" id="" class="form-control" value="<?= $stagiaire->nom?>">
    </div>
    <div class="form-group">
        <label for="">prenom</label>
        <input type="text" name="prenom" id="" class="form-control" value="<?= $stagiaire->prenom?>">
    </div>
    <div class=" form-group">
        <label for="">age</label>
        <input type="number" name="age" id="" class="form-control" value="<?= $stagiaire->age?>">
    </div>
    <div class=" form-group">
        <label for="">login</label>
        <input type="text" name="login" id="" class="form-control" value="<?= $stagiaire->login?>">
    </div>
    <div class=" form-group">
        <label for="">mdp</label>
        <input type="password" name="mdp" id="" class="form-control" value="<?= $stagiaire->password?>">
    </div>
    <div class="form-group">
        <input type="submit" name="Modifier" value="Modifier" id="" class="btn btn-primary my-2 w-100" >
    </div>
</form>
<?php
$content =  ob_get_clean();?>

<?php
// l'appel de la page layout master
include_once"views/layout.php";
?>
