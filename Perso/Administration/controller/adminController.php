<?php
include_once('model/adminModel.php');

class AdminController extends AdminsModel
{
    protected $id_administration;
    protected $nom_admin;
    protected $prenom_admin;
    protected $email_admin;
    protected $mdp_admin;
    protected $tel_admin;
    protected $id_role;

    
    public function formConnexion()
    {
        include('view/connexion.php');
    }

    public function connexion()
    {
        $this->email = trim($_POST['email']);
        $this->mdp = $_POST["mdp"];

        if ($this->email_admin != '' && $this->mdp_admin != '') {
            $admin = $this->getAdminsByEmail();

            if (password_verify($this->mdp_admin, $admin['mdp_admin'])&& $this->email_admin == $admin['mdp_admin']) {
                $_SESSION['nom_admin'] = $admin['nom_admin'];
                $_SESSION['prenom_admin'] = $admin['prenom_admin'];
                $_SESSION['email_admin'] = $admin['email_admin'];
                $_SESSION['id_admin'] = $admin['id_administration'];

                $_SESSION['role'] = $admin['role'];
                $_SESSION['id_role'] = $admin['id_role'];
                header('Location: index.php?page=formations');
            }
        }else {
            echo "merci de remplir le formulaire";
            $this->formConnexion();
        }
    }

    public function deconnexion()
    {
        $_SESSION = array();
        header('Location: index.php');
    }

   
}
