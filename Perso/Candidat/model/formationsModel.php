<?php
include_once('bdd.php');
class FormationsModel
{
    private $db;
    public function __construct()
    {
      $this->db = Bdd::connexion();
    }


    public function getFormations()
    {
        return $this->db->query("SELECT * FROM formation")->fetchAll(PDO::FETCH_ASSOC);
    }
}
