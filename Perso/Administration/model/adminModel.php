<?php
include_once('bdd.php');
//à compléter
class AdminModel
{
    private $db;
    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function setCandidat()
    {
        $query = $this->db->prepare("INSERT INTO candidat(nom,prenom,tel,email,mdp) VALUES(?,?,?,?,?)");
        return $query->execute([$this->nom, $this->prenom, $this->tel, $this->email, $this->mdp]);
    }

    public function getUsers()
    {
        $query = "SELECT users.*,roles.* FROM users left JOIN affecter ON users.id_user=affecter.id_user left JOIN roles ON roles.id_role=affecter.id_role ORDER BY users.nom";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserByEmail()
    {
        return $this->db->query("SELECT * FROM users left JOIN affecter ON users.id_user=affecter.id_user left JOIN roles ON roles.id_role=affecter.id_role  WHERE email='{$this->email}'")->fetch(PDO::FETCH_ASSOC);
    }
    public function getRoles()
    {
        return $this->db->query("SELECT * FROM roles")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id)
    {
        return $this->db->query("SELECT * FROM users WHERE id_user=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser()
    {
        $query = $this->db->prepare("UPDATE users SET nom=?,prenom=?,tel=?,email=? WHERE id_user=?");
        return $query->execute([$this->nom, $this->prenom, $this->tel, $this->email, $this->id_user]);
    }


    public function getRoleUser($id_user)
    {
        return $this->db->query("SELECT * FROM affecter WHERE id_user=$id_user ")->fetch(PDO::FETCH_ASSOC);
    }
    public function updateRoleUser()
    {

        if ($this->getRoleUser($this->id_user)) {
            $query = $this->db->prepare("UPDATE affecter SET id_role=? WHERE id_user=?");
            return $query->execute([$this->id_role, $this->id_user]);
        } else {
            $query = $this->db->prepare("INSERT INTO affecter(id_role,id_user) VALUES(?,?)");
            return $query->execute([$this->id_role, $this->id_user]);
        }
    }

    public function deleteUser()
    {
    }
}




















