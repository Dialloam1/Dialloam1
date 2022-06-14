<?php
include_once('model/candidatModel.php');

class CandidatController 
{

    private $model;
 
    public function __construct()
    {
        $this->model = new candidatModel;
    }

    public function formInscriptionCandidat()
    {
        include('view/inscriptionCandidat.php');
    }

    public function inscriptionCandidat()
    {
        $this->model->email_candidat = trim($_POST['email']);
        $this->model->mdp_candidat = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        if ($this->model->email_candidat != '') {
            $candidat = $this->model->getCandidatByEmail();
            if ($candidat) {
                echo ('email existant');
                $this->formInscriptionCandidat();
            } else {
                echo ('inscription établie');
                $this->model->setCandidat();
                header('Location: index.php');
            }
        } else {
            echo ("connexion ko");
            $this->formInscriptionCandidat();
        }
    }

    public function formFicheCandidat()
    {
        $candidat = $this->model->getCandidatById($_SESSION['id_candidat']);
        include_once('view/modifFicheCandidat.php');
    }

    public function ficheCandidat()
    {

        $this->model->id_candidat = $_SESSION['id_candidat'];
        $this->model->nom_candidat = trim($_POST['nom']);
        $this->model->prenom_candidat = trim($_POST['prenom']);
        $this->model->date_naissance = trim($_POST['dateDeNaissance']);
        $this->model->nationalite_candidat = trim($_POST['nationalite']);
        $this->model->tel_candidat = trim($_POST['tel1']);
        $this->model->tel2_candidat = trim($_POST['tel2']);
        $this->model->genre = (@$_POST['genre']);
        $this->model->ine_bea = trim($_POST['ine_bea']);
        $this->model->adresse_candidat = trim($_POST['adresse1']);
        $this->model->adresse2_candidat = trim($_POST['adresse2']);
        $this->model->cp_candidat = trim($_POST['cp']);
        $this->model->ville_candidat = trim($_POST['ville']);
        $this->model->pays_candidat = trim($_POST['pays']);


        if ($this->model->nom_candidat != '' && $this->model->prenom_candidat != '' && $this->model->date_naissance != '' && $this->model->nationalite_candidat != '' && $this->model->tel_candidat != '') {
            if ($this->model->updateCandidat()) {
                echo "merci d'avoir rempli la fiche";
            } else {
                $this->formFicheCandidat();
            }
        }
    }

    public function formConnexion()
    {
        include_once('view/accueil.php');
    }

    public function connexion()
    {
        $this->model->email_candidat = trim($_POST['email']);
        $this->model->mdp_candidat = $_POST["mdp"];

        if ($this->model->email_candidat != '' && $this->model->mdp_candidat != '') {
            $candidat = $this->model->getCandidatByEmail();

            if (password_verify($this->model->mdp_candidat, $candidat['mdp_candidat']) && $this->model->email_candidat == $candidat['email_candidat']) {
                //if ($this->model->mdp_candidat == $candidat['mdp_candidat'] && $this->model->email_candidat == $candidat['email_candidat']) {
                $_SESSION['nom_candidat'] = $candidat['nom_candidat'];
                $_SESSION['prenom_candidat'] = $candidat['prenom_candidat'];
                $_SESSION['email_candidat'] = $candidat['email_candidat'];
                $_SESSION['id_candidat'] = $candidat['id_candidat'];
                header('Location: index.php?page=listeDesFormations');
            }
        } else {
            echo "veuillez compléter la fiche inscription candidat";
            $this->formConnexion();
        }
    }

    public function deconnexion()
    {
        $_SESSION = array();
        header('Location: index.php');
    }

    public function formMonCompte()
    {
        $candidat = $this->model->getCandidatById($_SESSION['id_candidat']);
        include('view/formModifMonCompte.php');
    }

    public function monCompte()
    {
        $candidat = $this->model->getCandidatById($_SESSION['id_candidat']);
        include_once('view/monCompte.php');
    }
    public function modifierMonCompte()
    {
        $candidat = $this->model->getCandidatById($_SESSION['id_candidat']);
        include('view/formModifMonCompte.php');
    }

    public function listeDesCandidats()
    {
        $candidat = $this->model->getCandidatByEmail();
        include('view/listeDescandidats.php');
    }
}
