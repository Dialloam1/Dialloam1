<?php
include_once('model/candidatModel.php');

class CandidatController extends CandidatModel
{
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


    public function formCreerCompte()
    {
        include('view/creerCompte.php');
    }

    public function creerCompte()
    {
        $this->email = trim($_POST['email_candidat']);
        $this->mdp = password_hash($_POST["mdp_candidat"], PASSWORD_DEFAULT);
        if ($this->email_candidat != '' && $this->mdp_candidat != '' && $this->password_verify != '') {
            if ($this->setCandidat()) {
                echo 'inscription OK';
            }
        } else {
            $this->formCreerCompte();
        }
    }

    public function formFicheCandidat()
    {
        include_once('view/modifFicheCandidat.php');
    }

    public function ficheCandidat()
    {

        $this->email = trim($_POST['email_candidat']);
        $this->mdp = password_hash($_POST["mdp_candidat"], PASSWORD_DEFAULT);

        if ($this->email_candidat != '' && $this->mdp_candidat != '' && $this->password_verify != '') {
            if ($this->setCandidat()) {
                echo 'inscription OK';
            }
        } else {
            $this->formFicheCandidat();
        }
    }


    public function formConnexion()
    {
        include_once('view/accueil.php');
        //include_once('view/connexion.php');
    }

    public function connexion()
    {
        $this->email = trim($_POST['email']);
        $this->mdp = $_POST["mdp"];


        if ($this->email != '' && $this->mdp != '') {
            $candidat = $this->getCandidatByEmail();

            if (password_verify($this->mdp, $candidat['mdp'])) {
                $_SESSION['nom_candidat'] = $candidat['nom'];
                $_SESSION['prenom_candidat'] = $candidat['prenom'];
                $_SESSION['email_candidat'] = $candidat['email'];

                $_SESSION['id_candidat'] = $candidat['id_candidat'];
            }
        } else {
            echo "veuillez compléter la fiche candidat";//formations/se déconnecter
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
        $candidat = $this->getCandidatById($_SESSION['id_candidat']);
        include('view/formModifMonCompte.php');
    }
    public function modifierMonCompte()
    {

        $this->id_candidat = $_SESSION['id_candidat'];
        $this->nom = trim($_POST['nom_candidat']);
        $this->prenom = trim($_POST['prenom_candidat']);
        $this->email = trim($_POST['email_candidat']);
       
        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->updateCandidat()) {
                $_SESSION['nom_candidat'] = $this->nom;
                $_SESSION['prenom_candidat'] = $this->prenom;
                $_SESSION['email_candidat'] = $this->email;
                echo 'Modification OK';
            }
        } else {
            $this->formMonCompte();
        }
    }
/*  voir si necessaire ou faire function modifierMdp avec updateMdpCandidat sur Model?
   public function formModifMdp()
    {
        $this->getCandidatById($_SESSION['id_candidat']); //$candidat
        include('view/formModifMonMdp.php');
    }
*/
//public function modifierMdp(){
   // $this->id_candidat = $_POST['id_candidat'];
    //$this->updateMdpCandidat();
//}
    public function monCompte()
    {
        $candidat = $this->getCandidatById($_SESSION['id_candidat']);
        include_once('view/monCompte.php');
    }
    public function listeDesCandidats()
    {
        $candidats = $this->getCandidatByEmail();
        include('view/listeDescandidats.php');
    }
}
