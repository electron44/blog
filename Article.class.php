<?php

declare(strict_types=1);
/**
 * Cette classe permetde representer une article
 * @param $titre string
 * @param $content string
 * @param $auteur
 */
/** Apres je vais ajouter la date**/
class Article{

    private string $titre;
    private string $content;
    private string $auteur;


    public function __construct(string $titre,string $content, string $auteur){
        $this->titre = $titre;
        $this->content = $content;
        $this->auteur = $auteur;
    }

    public function getTitre() : string{
        return $this->titre;
    }
    

    public function getAuteur() : string{
        return $this->auteur;
    }


    public function getContent() : string{
        return $this->content;
    }


    public function setTitre(string $titre){
         $this->titre = $titre;
    }

    public function setAuteur(string $auteur){
        $this->titre = $titre;
    }

   public function setContent(string $content){
        $this->content = $content;
    }
}

?>