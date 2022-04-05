<?php
include_once('model/adminModel.php');

class AdminController extends AdminModel
{
    protected $id_administration;
    protected $nom;
    protected $prenom;
    protected $tel;
    protected $email;
    protected $mdp;
    protected $id_role;

    public function formInscription()
    {
        include('view/creerCompte.php');
    }

    public function inscription()
    {

        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->tel = trim($_POST['tel']);
        $this->email = trim($_POST['email']);
        $this->mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);


        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->setCandidat()) {
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
            $user = $this->getUserByEmail();

            if (password_verify($this->mdp, $user['mdp'])) {
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $user['email'];

                $_SESSION['id_user'] = $user['id_user'];

                $_SESSION['role'] = $user['role'];
                $_SESSION['id_role'] = $user['id_role'];

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
        $user = $this->getUserById($_SESSION['id_user']);
        include('view/formModifMonMdp.php');
    }
    public function modifierMonCompte()
    {
        $this->id_user = $_SESSION['id_user'];
        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->tel = trim($_POST['tel']);
        $this->email = trim($_POST['email']);


        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->updateUser()) {
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
        $user = $this->getUserById($_SESSION['id_user']);
        include('view/connexion.php');
    }
    
}
