<?php
include_once('bdd.php');

class AdminsModel
{
    private $db;
    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function setAdmins()
    {
        $query = $this->db->prepare("INSERT INTO administration(id_administration,nom_admin,prenom_admin,email_admin,mdp_admin,identifiant_admin,tel_admin,creation_admin,modif_admin,validite_admin,connexion_admin,id_role) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
        return $query->execute([$this->nom, $this->prenom, $this->tel, $this->email, $this->mdp]);
    }

    public function getAdmins()
    {
        $query = "SELECT administration.*,roles.* FROM administration left JOIN affecter ON administration.id_administration=affecter.id_administration left JOIN roles ON roles.id_role=affecter.id_role ORDER BY administration.nom_admin";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAdminsByEmail()
    {
        return $this->db->query("SELECT * FROM administration left JOIN affecter ON administation.id_admin=affecter.id_admin left JOIN roles ON roles.id_role=affecter.id_role  WHERE email_admin='{$this->email_admin}'")->fetch(PDO::FETCH_ASSOC);
    }
    public function getRoles()
    {
        return $this->db->query("SELECT * FROM roles")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAdminById($id)
    {
        return $this->db->query("SELECT * FROM administration WHERE id_admin=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAdmin()
    {
        $query = $this->db->prepare("UPDATE administration SET nom_admin=?,prenom_admin=?,email_admin=?,tel_admin=?,creation_admin=?,validite_admin=?,id_administration=? WHERE id_administration=?");
        return $query->execute([$this->nom_admin, $this->prenom_admin, $this->email_admin, $this->tel_admin, $this->creation_admin, $this->validite_admin, $this->id_administration]);
    }


    public function getRoleAdmin($id_administration)
    {
        return $this->db->query("SELECT * FROM affecter WHERE id_administration=$id_administration")->fetch(PDO::FETCH_ASSOC);
    }
    public function updateRoleAdmin()
    {

        if ($this->getRoleAdmin($this->id_administration)) {
            $query = $this->db->prepare("UPDATE affecter SET id_role=? WHERE id_administration=?");
            return $query->execute([$this->id_role, $this->id_admin]);
        } else {
            $query = $this->db->prepare("INSERT INTO affecter(id_role,id_administration) VALUES(?,?)");
            return $query->execute([$this->id_role, $this->id_administration]);
        }
    }

}




















