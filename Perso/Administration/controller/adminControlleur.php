<?php
include_once('model/adminModel.php');

class AdminController extends AdminModel
{
    protected $id_administration;
    protected $nom_admin;
    protected $prenom_admin;
    protected $email_admin;
    protected $mdp_admin;
    protected $tel_admin;
    protected $id_role;

    public function formInscription()
    {
        include('view/creerCompte.php');
    }

    public function inscription()
    {

        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->email = trim($_POST['email']);
        $this->mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);


        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->setAdmins()) {
                echo 'inscription OK';

              mail($this->email, 'sujet', 'Bonjour, <br> Bienvenue !');

            }
        } else {
            $this->formInscription();
        }
    }

    public function formConnexion()
    {
        include('view/connexion.php');
    }

    public function connexion()
    {
        $this->email = trim($_POST['email']);
        $this->mdp = $_POST["mdp"];

        if ($this->email != '' && $this->mdp != '') {
            $user = $this->getAdminByEmail();

            if (password_verify($this->mdp, $user['mdp'])) {
                $_SESSION['nom'] = $admin['nom'];
                $_SESSION['prenom'] = $admin['prenom'];
                $_SESSION['email'] = $admin['email'];

                $_SESSION['id_admin'] = $admin['id_administration'];

                $_SESSION['role'] = $admin['role'];
                $_SESSION['id_role'] = $admin['id_role'];

            }
        } else {
            echo "merci de remplir le formulaire";
            $this->formConnexion();
        }
    }

    public function deconnexion()
    {
        $_SESSION = array();
        header('Location: index.php');
    }

    public function formModifMdp()
    {
        $user = $this->getAdminById($_SESSION['id_administration']);
        include('view/formModifMonMdp.php');
    }
    public function modifierMonCompte()
    {
        $this->id_user = $_SESSION['id_administration'];
        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->tel = trim($_POST['tel']);
        $this->email = trim($_POST['email']);


        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->updateAdmin()) {
                $_SESSION['nom'] = $this->nom;
                $_SESSION['prenom'] = $this->prenom;
                $_SESSION['email'] = $this->email;
                echo 'Modification OK';
            }
        } else {
            $this->formModifMdp();
        }
    }
    public function monCompte()
    {
        $user = $this->getAdminById($_SESSION['id_administration']);
        include('view/connexion.php');
    }
    
}
