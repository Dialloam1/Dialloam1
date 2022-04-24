<h2> Liste des Candidats</h2>

<table>
    <tr>
        <th>nom_candidat</th>
        <th>prenom_candidat</th>
        <th>date_naissance</th>
        <th>genre</th>
        <th>adresse_candidat</th>
        <th>adresse2_candidat</th>
        <th>cp_candidat</th>
        <th>ville_candidat</th>
        <th>pays_candidat</th>
        <th>tel_candidat</th>
        <th>tel2_candidat</th>
        <th>email_candidat</th>
        <th>mdp_candidat</th>
        <th>ine_bea</th>
        <th>nationalite_candidat</th>
        <th>lieu_naissance</th>
    </tr>

    <?php foreach ($candidats as $candidat) { ?>
        <!-- Je parcours $candidats et la valeur est copiée dans $candidat-->
        <tr>
            <td><?php echo $candidat['nom_candidat'] ?></td> <!-- l'affichage-->
            <td><?php echo $candidat['prenom_candidat'] ?></td>
            <td><?php echo $candidat['date_naissance'] ?></td>
            <td><?php echo $candidat['genre'] ?></td>
            <td><?php echo $candidat['adresse_candidat'] ?></td>
            <td><?php echo $candidat['adresse2_candidat'] ?></td>
            <td><?php echo $candidat['cp_candidat'] ?></td>
            <td><?php echo $candidat['ville_candidat'] ?></td>
            <td><?php echo $candidat['pays_candidat'] ?></td>
            <td><?php echo $candidat['tel_candidat'] ?></td>
            <td><?php echo $candidat['tel2_candidat'] ?></td>
            <td><?php echo $candidat['email_candidat'] ?></td>
            <td><?php echo $candidat['mdp_candidat'] ?></td>
            <td><?php echo $candidat['ine_bea'] ?></td>
            <td><?php echo $candidat['nationalite_candidat'] ?></td>
            <td><?php echo $candidat['lieu_naissance'] ?></td>
        <?php }  ?>
</table>