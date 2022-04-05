<?php
include_once('model/candidatModel.php');

class CandidatController extends CandidatModel{
    protected $id_candidat;
    protected $nom_candidat;
    protected $prenom_candidat;
    protected $date_naissance;
    protected $genre;
    protected $adresse_candidat;
    protected $adresse2_candidat;
    protected $cp_candidat;
    protected $ville_candidat;
    protected $pays_candidat;
    protected $tel_candidat;
    protected $tel2_candidat;
    protected $email_candidat;
    protected $mdp_candidat;
    protected $ine_bea;
    protected $nationalite_candidat;
    protected $lieu_naissance;

    public function formInscription()
    {

        include('view/creerCompte.php');
    }

    public function inscriptionFicheCandidat()
    {
        
        $this->nom = trim($_POST['nom_candidat']);
        $this->prenom = trim($_POST['prenom_candidat']);
        $this->dateNaiss = trim($_POST['date_naissance']);
        $this->genre = trim($_POST['genre']);
        $this->adresse1 = trim($_POST['adresse_candidat']);
        $this->adresse2 = trim($_POST['adresse2_candidat']);
        $this->cp = trim($_POST['cp_candidat']);
        $this->ville = trim($_POST['ville_candidat']);
        $this->pays = trim($_POST['pays_candidat']);
        $this->tel1 = trim($_POST['tel_candidat']);
        $this->tel2 = trim($_POST['tel2_candidat']);
        $this->email = trim($_POST['email_candidat']);
        $this->mdp = password_hash($_POST["mdp_candidat"], PASSWORD_DEFAULT);
        $this->ine_bea = trim($_POST['ine_bea']);
        $this->nationalite = trim($_POST['nationalite_candidat']);
        $this->lieuNaiss = ($_POST["lieu_naissance"]);


        if ($this->email_candidat= '' && $this->mdp_candidat != '' && $this->password_verify != '') {
            if ($this->setCandidat()) {
                echo 'inscription OK';
            }
        } else {
            $this->formInscription();
        }
    }

    public function formConnexion()
    {

        include('view/creerCompte.php');
    }

    public function connexion()
    {
        $this->email = trim($_POST['email']);
        $this->mdp = $_POST["mdp"];
        

        if ($this->email != '' && $this->mdp != '') {
            $candidat = $this->getCandidatByEmail();

            if (password_verify($this->mdp, $candidat['mdp'])) {
                $_SESSION['nom'] = $candidat['nom'];
                $_SESSION['prenom'] = $candidat['prenom'];
                $_SESSION['email'] = $candidat['email'];

                $_SESSION['id_candidat'] = $candidat['id_candidat'];
            }
        } else {
            echo "merci de compléter la fiche candidat";
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
        $this->getCandidatById($_SESSION['id_candidat']); //$candidat
        //include('view/formModifMonMdp.php');
        include('view/creerCompte.php');
    }
    public function modifierMonCompte()
    {
        
        $this->nom = trim($_POST['nom_candidat']);
        $this->prenom = trim($_POST['prenom_candidat']);
        $this->DateNaiss = trim($_POST['date_naissance']);
        $this->genre = trim($_POST['genre']);
        $this->adresse1 = trim($_POST['adresse_candidat']);
        $this->adresse2 = trim($_POST['adresse2_candidat']);
        $this->cp = trim($_POST['cp_candidat']);
        $this->ville = trim($_POST['ville_candidat']);
        $this->pays = trim($_POST['pays_candidat']);
        $this->tel1 = trim($_POST['tel_candidat']);
        $this->tel2 = trim($_POST['tel2_candidat']);
        $this->email = trim($_POST['email_candidat']);
        $this->ine_bea = trim($_POST['ine_bea']);
        $this->nationalite = trim($_POST['nationalite_candidat']);
        $this->mdp = ($_POST["lieu_naissance"]);
       //$this->mdp2 = ($_POST['password_verify']);



        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->updateCandidat()) {
                $_SESSION['nom'] = $this->nom;
                $_SESSION['prenom'] = $this->prenom;
                $_SESSION['email'] = $this->email;
                echo 'Modification OK';
            }
        } else {
            $this->formModifMdp();
        }
    }
}
