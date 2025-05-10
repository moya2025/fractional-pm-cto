<?php
$prenom = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$nom = !empty($_POST['last_name']) ? $_POST['last_name'] : NULL;
$from = !empty($_POST['email']) ? $_POST['email'] : NULL;
$msg = !empty($_POST['message']) ? $_POST['message'] : NULL;
$tel = !empty($_POST['phone']) ? $_POST['phone'] : NULL;
$headers = 'From: WEBSITE E-MAIL';
//  echo "$msg" . "$nom" . "$from";

if(empty($prenom) || empty($nom) || empty($from) || empty($msg)) 
{
     echo 'Mail couldn't be send, a fiel is empty';
}
elseif(mail('EMAIL ADRESS', "Commande Amarrex de $prenom $nom", "$prenom $nom a ecrit : $msg \n\n\n E-mail de contact : $from\n\n Telephone : $tel", "$headers"))
{
     echo 'Mail sent.';
}
else
{
    echo 'mail not sent, unexpected error';
}
// }
?>