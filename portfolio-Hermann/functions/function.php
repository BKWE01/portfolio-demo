<?php
function addContact($nom, $email, $phone, $messages){
    require("connexion.php");
    $req=$db->prepare("INSERT INTO contact_db(nom, email, phone, messages) VALUE(?, ?, ?, ?)");
    $req->execute([$nom, $email, $phone, $messages]);
    if ($req) {
        return true;
    }
}