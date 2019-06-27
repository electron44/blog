<?php
class Recuperateur{


    public function getArticleByCategorie($categorie){
        $pdo = new BD('blog');
        $pdo=$pdo->connexion();

        $req=$pdo->prepare('select * from article where categorie = :categorie');
        $req->execute(array(
            'categorie' => $categorie
        ));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }


    public function getCategorie(){
        $pdo = new BD('blog');
        $pdo=$pdo->connexion();
        $req=$pdo->prepare('select * from  categorie');
        $req->execute();
        $categorie=$req->fetchAll(PDO::FETCH_OBJ);
        return $categorie;
    }
}