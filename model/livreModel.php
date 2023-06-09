<?php 

function listLivre(){   
    include './connect.php';
    $stmt = $conn->query("SELECT * FROM livre") ; 
    $stmt->execute();
    $livres = $stmt->fetchAll(PDO::FETCH_OBJ); 
    return $livres;
} 
function ajouterLivre(){ 
    include './connect.php';
    $stmt = $conn->prepare("INSERT INTO livre (auteur,titre) VALUES (?,?)") ; 
    return $stmt->execute(array($_POST['Auteur'],$_POST['Titre']));        
} 

function supprimerLivre(){
    include './connect.php';
    $stmt = $conn->prepare("DELETE FROM livre WHERE id_livre = ?") ; 
    return  $stmt->execute(array($_GET['id_livre']));        
} 

function modifierLivre($auteur,$titre,$id_livre){ 
    include './connect.php'; 
    $stmt = $conn->prepare("UPDATE livre SET auteur = ?, titre = ? WHERE id_livre = ?") ; 
    return $stmt->execute([$auteur,$titre,$id_livre]);   
} 
function view($id)
{
    include './connect.php';
    $sqlState = $conn->prepare("SELECT * FROM livre WHERE id_livre = ?");
    $sqlState->execute(array($id));
    return $sqlState->fetch(PDO::FETCH_OBJ);

}