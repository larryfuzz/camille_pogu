<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=camille_pogu;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$requette = $bdd->prepare('INSERT INTO Article (text) VALUES(?)');
 $requette->execute(array($_POST['article']));

 
$reponse = $bdd->query('SELECT * FROM Article');
$articles = $reponse->fetchAll();
include('articles.php');

 

 /*
$query = $db->prepare('INSERT INTO Post (Title, Contents, CreationTimeStamp, Author_Id, Category_Id) VALUES (?, ?, NOW(), ?, ?)');
if (isset($_POST['title']) AND isset($_POST['mainText']) AND isset($_POST['authorId']) AND isset($_POST['categoryId'])) {
    $query->execute(array($_POST['title'], $_POST['mainText'], $_POST['authorId'], $_POST['categoryId']));
    header('Location: index.php');
}
*/