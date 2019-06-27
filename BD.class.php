<?php
declare(strict_types=1);

class BD{
    
    private $host;
    private $mdp;
    private $dbName;
    private $userName;
    private $pdo;

    /**
     * Constructeur de la classe DB
     */
    public function __construt($host='localhost', $mdp="", $dbname,$username='root'){
        $this->host = $host;
        $this->mdp = $mdp;
        $this->dbName = $dbname;
        $this->userName = $username;
    }


    private  function getPDO () : PDO {
        if($this->pdo===null){
             $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    public function connexion(){
        return $this->getPDO();
    }
    public function select($request){
        $req = $this->getPDO()->prepare($request);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }


    public function insert($table,$column = array()){

        $req=$this->getPDO()->prepare("insert into $table $column[0]=? , $column[1]? ,$column[2]=?");
        $req->execute(array(

        ));
    }
}