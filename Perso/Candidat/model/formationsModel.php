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
        return $this->db->query("SELECT * from formation LEFT JOIN regime ON formation.id_formation=regime.id_formation LEFT JOIN lieu ON formation.id_lieu=lieu.id_lieu LEFT JOIN info_candidature ON formation.id_formation=info_candidature.id_formation")->fetchAll(PDO::FETCH_ASSOC);
    }
  
}
