<?php
include_once('bdd.php');

class CandidatModel extends CandidatController
{
    private $db;
    public $id_candidat;
    public $nom_candidat;
    public $prenom_candidat;
    public $date_naissance;
    public $genre;
    public $adresse_candidat;
    public $adresse2_candidat;
    public $cp_candidat;
    public $ville_candidat;
    public $pays_candidat;
    public $tel_candidat;
    public $tel2_candidat;
    public $email_candidat;
    public $mdp_candidat;
    public $ine_bea;
    public $nationalite_candidat;

    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function setCandidat()
    {
        $query = $this->db->prepare("INSERT INTO candidat(email_candidat, mdp_candidat) VALUES (?,?)");
        return $query->execute([$this->email_candidat, $this->mdp_candidat]);
    }

    public function getCandidatByEmail()
    {
        return $this->db->query("SELECT * FROM candidat WHERE email_candidat='{$this->email_candidat}'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getCandidatById($id)
    {
        return $this->db->query("SELECT * FROM candidat WHERE id_candidat=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCandidat()
    {
        $query = $this->db->prepare("UPDATE candidat SET nom_candidat=?,prenom_candidat=?,date_naissance=?,genre=?,adresse_candidat=?,adresse2_candidat=?,cp_candidat=?,ville_candidat=?,pays_candidat=?,tel_candidat=?,tel2_candidat=?,ine_bea=?,nationalite_candidat=? WHERE id_candidat=?");
        return $query->execute([$this->nom_candidat, $this->prenom_candidat, $this->date_naissance, $this->genre, $this->adresse_candidat, $this->adresse2_candidat, $this->cp_candidat, $this->ville_candidat, $this->pays_candidat, $this->tel_candidat, $this->tel2_candidat, $this->ine_bea, $this->nationalite_candidat, $this->id_candidat]);
    }
}
