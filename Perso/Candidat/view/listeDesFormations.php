<h2> Liste des formations </h2>
<!-- Je parcours $formations et la valeur est copiée dans $form-->
<table>
    <thead>
        <th>Nom </th>
        <th>Lieu </th>
        <th>Régime </th>
        <th>Début formation</th>
        <th>Brochure</th>
        <th>Site</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach ($formations as $form) { ?>
            <tr>
                <td><?= $form['libelle_formation']; ?></td>
                <td><?= $form['nom_lieu']; ?></td>
                <td>
                    <?php
                    if ($form['regime_initial'] == 1) {
                        echo ('<div> régime initial </div>');
                    }
                    if ($form['regime_continu'] == 1) {
                        echo ('<div> régime continu</div>');
                    }
                    if ($form['regime_apprentissage'] == 1) {
                        echo ('<div> régime apprentissage </div>');
                    }
                    ?>
                </td>
                <td><?= $form['debut_formation']; ?> </td> <br>
                <td> <?= $form['brochure_formation']; ?> </td>
                <td><?= $form['site_formation']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>