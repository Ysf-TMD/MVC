<?php
//selection de la base de données (select  insert ...)

//function pour la connexion a la base de donnees

function connexionDB(){

    return new PDO("mysql:dbname=mvcstg;host =localhost" , "root" , "");

}
//function pour l'appel de la requette
function listeStagiaires(){
    // la connexion a la base de donné
    $pdo = connexionDB() ;
    return  $pdo->query("SELECT * FROM stagiaires")->fetchAll(PDO::FETCH_OBJ);
}
function create()
{
    // on peut utiliser la function exctract($_POST) pour crées les variables nécessaires mais elle port qlq pb de sécurité
    //si non tu utilise $nom = $_POST["nom"];
    $pdo = connexionDB();
    $sqlstate = $pdo->prepare("INSERT INTO  stagiaires VALUES (null,?,?,?,?,?)");
    return  $sqlstate->execute([$_POST["nom"],$_POST["prenom"],$_POST["age"],$_POST["login"],$_POST["mdp"]]);
}
function view($id)
{
    //creation de la function qui permet d'afficher d'un seul personne coresponde a l'id ciblé ;
    $pdo=connexionDB();
    $sqlstate=$pdo->prepare('SELECT * FROM stagiaires WHERE id=?');
    $sqlstate->execute([$id]);
    return $sqlstate->fetch(PDO::FETCH_OBJ);

}
function edit($id , $nom , $prenom , $age , $login , $mdp )
{
    $pdo=connexionDB();
    $sqlstate=$pdo->prepare('UPDATE  stagiaires
                                    SET nom = ?,
                                        prenom = ?,
                                        age = ?,
                                        login = ?,
                                        password= ?
                                    WHERE id=?');
    return $sqlstate->execute([$nom , $prenom , $age , $login , $mdp,$id]);
}
function destroy($id)
{
    //creation de la req de suppression ;
    $pdo=connexionDB();
    $sqlstate=$pdo->prepare("DELETE FROM stagiaires WHERE id= ?");
    return $sqlstate->execute([$id]);

}