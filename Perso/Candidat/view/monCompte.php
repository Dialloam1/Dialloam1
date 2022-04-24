<h2> Modifier mon compte</h2>

<div>
    <div>
        Nom : <?= $candidat['nom_candidat'] ?>
    </div>
    <div>
        Prénom : <?= $candidat['prenom_candidat'] ?>
    </div>
    
    <div>
        email : <?= $candidat['email_candidat'] ?>
    </div>
    <div>
   <!--
    est ce qu'il faut mettre mdp? mdp2 aussi :prb sécurité ?
-->
    <a href="?page=modifierMonCompte">Modifier mon compte</a>
</div>