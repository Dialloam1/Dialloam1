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
    


    public function formInscriptionCandidat()
    {
        include('view/inscriptionCandidat.php');
    }

    public function inscriptionCandidat()
    {
        $this->email_candidat = trim($_POST['email']);
        $this->mdp_candidat = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        if ($this->email_candidat != '') {
            $candidat = $this->getCandidatByEmail();
            if ($candidat) {
                echo ('email existant');
                $this->formInscriptionCandidat();
                
            } else {
                echo ('inscription établie');
                $this->setCandidat();
                header('Location: index.php');
            }
        }else{
            echo("connexion ko");
            $this->formInscriptionCandidat();
        }
    }

    public function formFicheCandidat()
    {
        include_once('view/modifFicheCandidat.php');
    }

    public function ficheCandidat()
    {
        $this->nom_candidat = trim($_POST['nom']);
        $this->prenom_candidat = trim($_POST['prenom']);
        $this->date_naissance = trim($_POST['dateDeNaissance']);
        $this->nationalite_candidat = trim($_POST['nationalite']);
        $this->tel_candidat = trim($_POST['tel1']);
        $this->tel2_candidat = trim($_POST['tel2']);
        $this->genre = trim($_POST['genre']);
        $this->ine_bea = trim($_POST['ine_bea']);
        $this->adresse_candidat = trim($_POST['adresse1']);
        $this->adresse2_candidat = trim($_POST['adresse2']);
        $this->cp_candidat = trim($_POST['cp']);
        $this->ville_candidat = trim($_POST['ville']);
       
       
          if ($this->nom_candidat != '' && $this->prenom_candidat != '' && $this->date_naissance != '' && $this->nationalite_candidat != '' && $this->tel_candidat != '')
          {
             if($this->updateCandidat()){
             echo "merci d'avoir rempli la fiche";
             }else {
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
        $this->email_candidat = trim($_POST['email']);
        $this->mdp_candidat = $_POST["mdp"];

        if ($this->email_candidat != '' && $this->mdp_candidat != '') {
            $candidat = $this->getCandidatByEmail();

            //if (password_verify($this->mdp_candidat, $candidat['mdp_candidat'])) {
            if ($this->mdp_candidat == $candidat['mdp_candidat']) {
                $_SESSION['nom_candidat'] = $candidat['nom_candidat'];
                $_SESSION['prenom_candidat'] = $candidat['prenom_candidat'];
                $_SESSION['email_candidat'] = $candidat['email_candidat'];
                $_SESSION['id_candidat'] = $candidat['id_candidat'];
                header('Location: index.php');
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
        $candidat = $this->getCandidatById($_SESSION['id_candidat']);
        include('view/formModifMonCompte.php');
    }

    public function modifierMonCompte()
    {
        $this->id_candidat = $_SESSION['id_candidat'];
        $this->nom_candidat = trim($_POST['nom']);
        $this->prenom_candidat = trim($_POST['prenom']);
        $this->email_candidat = trim($_POST['email']);

        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->updateCandidat()) {
                $_SESSION['nom'] = $this->nom_candidat;
                $_SESSION['prenom'] = $this->prenom_candidat;
                $_SESSION['email'] = $this->email_candidat;
                echo 'Modification OK';
            }
        } else {
            $this->formMonCompte();
        }
    }

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
