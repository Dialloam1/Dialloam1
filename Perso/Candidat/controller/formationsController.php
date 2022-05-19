<?php
include_once('model/formationsModel.php');

class FormationsController extends FormationsModel
{
    protected $id_formation;
    protected $libelleCours_formation;
    protected $debut_formation;
    protected $fin_formation;
    protected $regime_formation;
    protected $commentaire_formation;
    protected $id_administration;
  

    public function afficheFormation()
  {
    $formations = $this->getFormations();
    include_once('view/listeDesFormations.php');
  }
 
   /**public function afficheFormation()
  {
    $this->id_formation = $_GET['id_formation'];

   $formation = $this->getFormations('id_formation');
    include_once('view/listeDesFormations.php');
  }
*/
}