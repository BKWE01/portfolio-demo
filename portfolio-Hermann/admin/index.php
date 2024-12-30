<?php 
require("actions".DIRECTORY_SEPARATOR."functions.php") ;
$all_messages=All_Message();

require("elements".DIRECTORY_SEPARATOR."header.php") ;
?>
<table class="table table-striped">
    <caption>Liste de messages</caption>
    <thead>
        <tr>
            <th># N°</th>
            <th>Nom et prenoms</th>
            <th>Adresse email</th>
            <th>Téléphone</th>
            <th>Messages</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_messages as $key => $messages) :?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $messages["nom"] ?></td>
            <td><?= $messages["email"] ?></td>
            <td><?= $messages["phone"] ?></td>
            <td><?= $messages["messages"] ?></td>
            <td>
                <a href="afficher.php?id=<?= $messages["id"] ?>" class="btn btn-outline-primary">afficher</a>
                <a href="editer.php?id=<?= $messages["id"] ?>" class="btn btn-outline-info">editer</a>
                <a href="supprimer.php?id=<?= $messages["id"] ?>" class="btn btn-outline-danger">supprimer</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require("elements".DIRECTORY_SEPARATOR."footer.php") ?>