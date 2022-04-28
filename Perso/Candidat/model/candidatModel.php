<?php

include_once('bdd.php');

class CandidatModel
{
    private $db;
    public function __construct()
    {
        $this->bd = Bdd::connexion();
    }

    public function setCandidat()
    {
        $query = $this->db->prepare("INSERT INTO candidat(nom_candidat,prenom_candidat,date_naissance,genre,adresse_candidat,adresse2_candidat,cp_candidat,ville_candidat,pays_candidat,tel_candidat,tel2_candidat,email_candidat,mdp_candidat,ine_bea,nationalite_candidat,lieu_naissance) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        return $query->execute([$this->nom_candidat, $this->prenom_candidat, $this->date_naissance, $this->genre, $this->adresse_candidat, $this->adresse2_candidat, $this->cp_candidat, $this->ville_candidat, $this->pays_candidat, $this->tel_candidat, $this->tel2_candidat, $this->email_candidat, $this->mdp_candidat, $this->ine_bea, $this->nationalite_candidat, $this->lieu_naissance]);

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
        $query = $this->db->prepare("UPDATE candidat SET nom_candidat=?,prenom_candidat=?,date_naissance=?,genre=?,adresse_candidat=?,adresse2_candidat=?,cp_candidat=?,ville_candidat=?,pays_candidat=?,tel_candidat=?,tel2_candidat=?,email_candidat=?,mdp_candidat=?,ine_bea=?,nationalite_candidat=?,lieu_candidat=? WHERE id_candidat=?");
        return $query->execute([$this->nom_candidat, $this->prenom_candidat,$this->date_naissance, $this->genre, $this->adresse_candidat, $this->adresse2_candidat, $this->cp_candidat, $this->ville_candidat, $this->pays_candidat, $this->tel_candidat, $this->tel2_candidat, $this->email_candidat, $this->mdp_candidat, $this->ine_bea, $this->nationalite_candidat, $this->lieu_naissance]);
    }

}




















