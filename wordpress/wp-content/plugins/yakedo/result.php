<?php

public function send_mail()
{
    $recipient = "bastien.narbone@gmail.com";
    $subject = "Nous contacter(reponse)";
    //$headers = $_POST['yakedo_contact_nom_prenom'].$_POST['yakedo_contact_telephone'];
    $result = wp_mail($recipient, $subject, $_POST['yakedo_contact_message']);
}

if(isset($_POST['yakedo_contact_message']))
{
    send_mail();
}