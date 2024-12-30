<?php
function All_Message(){
    require("..".DIRECTORY_SEPARATOR."functions".DIRECTORY_SEPARATOR."connexion.php");
    $req=$db->prepare("SELECT*FROM contact_db");
    $req->execute();
    return $req->fetchAll();
}
function detail_destinataire($id){
    require("..".DIRECTORY_SEPARATOR."functions".DIRECTORY_SEPARATOR."connexion.php");
    $req=$db->prepare("SELECT FROM contact_db(nom, email, phone, messages) WHERE id=?");
    $req->execute([$id]);
    return $req->fetch();
}
function update_destinataire($nom, $email, $phone, $messages, $id){
    require("..".DIRECTORY_SEPARATOR."functions".DIRECTORY_SEPARATOR."connexion.php");
    $req=$db->prepare("UPDATE contact_db SET (nom=?, email=?, phone=?, messages=?) WHERE id=?");
    $req->execute([$nom, $email, $phone, $messages, $id]);
}
function delete_destinataire($id){
    require("..".DIRECTORY_SEPARATOR."functions".DIRECTORY_SEPARATOR."connexion.php");
    $req=$db->prepare("DELETE FROM contact_db WHERE id=?");
    $req->execute([$id]);
}