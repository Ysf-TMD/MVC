<?php
$header_title = "ajouter Stagiaires";
$title="Ajouter Stagiaire";
ob_start();
?>
<form action="index.php?action=store" method="post" class="container">
    <div class="form-group">
        <label for="">nom</label>
        <input type="text" name="nom" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">prenom</label>
        <input type="text" name="prenom" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">age</label>
        <input type="number" name="age" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">login</label>
        <input type="text" name="login" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">mdp</label>
        <input type="password" name="mdp" id="" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="ajouter" value="ajouter" id="" class="btn btn-success my-2 w-100" >
    </div>
</form>
<?php
$content =  ob_get_clean();?>

<?php
// l'appel de la page layout master
include_once"views/layout.php";
?>
