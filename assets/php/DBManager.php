<?php 
class DBManager
{
    private $bdd;

    public function __construct()
    {
        try{
            $this->bdd = new PDO(
                'mysql:host=localhost;dbname=ToDoList;charset=utf8',
                'root',
                'root' //MDP
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getConnexion() {
        return $this->bdd;
    }
}
