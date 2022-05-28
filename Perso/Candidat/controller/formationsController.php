<?php
include_once('model/formationsModel.php');

class FormationsController extends FormationsModel
{
    protected $id_formation;
    protected $libelleCourt_formation;
    protected $debut_formation;
    protected $fin_formation;
    protected $regime_formation;
    protected $commentaire_formation;
    protected $id_administration;
  

    public function afficheFormations()
  {
    $formations = $this->getFormations();
    include_once('view/listeDesFormations.php');

  
  }
  
}