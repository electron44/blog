<?php
declare(strict_types=1); 
require 'Autoloader.class.php'; 
Autoloader::register(); 

 class Enregistreur{
   /**
    * 
    *
    *
    */


    public function ajouterArticle($categorie,$titre,$contenu,$auteur){
      
      $pdo = new BD('blog');
      $pdo = $pdo->connexion();
      $req = $pdo->prepare('insert into article categorie = ? , titre = ? , resume = ?, auteur = ?');
      $req->execute(array(
          'categorie' => $categorie,
          'titre' => $titre,
          'contenu' => $contenu,
          'date_publication' => $auteur
      ));
      return 1 ;
    }

}