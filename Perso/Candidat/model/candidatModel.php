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
        $query = $this->db->prepare("INSERT INTO candidat(nom,prenom,dateNaiss,genre,adresse1,adresse2,cp,ville,pays,tel1,tel2,email,mdp,ine_bea,nationalite,lieuNaiss) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        return $query->execute([$this->nom_candidat, $this->prenom_candidat, $this->date_naissance, $this->genre, $this->adresse_candidat, $this->adresse2_candidat, $this->cp_candidat, $this->ville_candidat, $this->pays_candidat, $this->tel_candidat, $this->tel2_candidat, $this->email_candidat, $this->mdp_candidat, $this->ine_bea, $this->nationalite_candidat, $this->lieu_naissance]);
    }

    public function getCandidatByEmail()
    {
        return $this->db->query("SELECT * FROM candidat left JOIN affecter ON candidat.id_candidat=affecter.id_candidat WHERE email='{$this->email}'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getCandidatById($id)
    {
        return $this->db->query("SELECT * FROM candidat WHERE id_candidat=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCandidat()
    {
        $query = $this->db->prepare("UPDATE candidat SET nom=?,prenom=?,dateNaiss=?,genre=?,adresse1=?,adresse2=?,cp=?,ville=?,pays=?,tel1=?,tel2=?,email=?,mdp=?,ine_bea=?,nationalite=?,lieuNaiss=? WHERE id_candidat=?");
        return $query->execute([$this->nom_candidat, $this->prenom_candidat,$this->date_naissance, $this->genre, $this->adresse_candidat, $this->adresse2_candidat, $this->cp_candidat, $this->ville_candidat, $this->pays_candidat, $this->tel_candidat, $this->tel2_candidat, $this->email_candidat, $this->mdp_candidat, $this->ine_bea, $this->nationalite_candidat, $this->lieu_naissance]);
    }

}




















