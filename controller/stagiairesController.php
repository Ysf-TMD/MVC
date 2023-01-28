<?php
// il  est important de noter que faut recupérer les models utiliser pour fair la liaison entre le model et controller ici ... voir que  le controlleur c'est le module responsable a la liaison entre vue (interface ) et la base de données ;
require_once "Model/stagiairesModel.php" ;

// mntn faut crée la fonction qui assure la liaison entre les 2 ;
function indexAction(){
    //recupérer la connexion via le modle // en appelant la fonction de connexion  ;
    $stagiaires = listeStagiaires();
    //ici faut faire l'appel de la vue responsable a l'affichage ;
    require_once 'views/listeStagiaires.php';
}
function createAction()
{
require_once 'views/create.php';
}
function storeAction()
{
    // on fait appel a la function create qui s'existe dans le model ;
    /* pour le test de la create vous pouvez ajouter un test simple
    $iscreated = create();
    if($iscreated){
    console.log()...
    }else {
        afficher message d'erreur
    }
    */
   create();

    // exécuter la redirection ;
    header("location:index.php");
}
function editAction()
{   $id=$_GET["id"];
    $stagiaire = view($id);
    require_once 'views/edite.php';
    //mntn faut faire l'appel de la vue ;

}
function updateAction()
{
     extract($_POST);

    edit($id , $nom , $prenom , $age , $login , $mdp);
    header("location:index.php?action=list");
}
function deleteAction()
{
    //recupération de l'id via GET ;
    $id=$_GET["id"];
    //l'appel de vue responsable de l'affichage de delete
    require_once'./views/delete.php';
}
function destroyAction()
{   // fonction faire appel au code qui va permet la suppresion ;
    $id=$_GET["id"];
    destroy($id);
    header("location:index.php?action=list");

}