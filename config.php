<?php

session_start();

//config.php

// Inclut la bibliothèque cliente Google pour le fichier de chargement automatique PHP
require_once 'vendor/autoload.php';

// Faire objet du client API Google pour appeler l'API Google
$google_client = new Google_Client();

// Définir l'ID client OAuth 2.0
$google_client->setClientId('233540080547-somb1ai32mrhqp8pisggl6gc3mb6m7ka.apps.googleusercontent.com');

// Définir la clé secrète du client OAuth 2.0
$google_client->setClientSecret('YfTlIEL7CcZOIXDaO_y2Irft');

// Définir l'URI de redirection OAuth 2.0
$google_client-> setRedirectUri ('http://localhost/googleconnect/');

//pour obtenir l'e-mail et le profil 
$google_client->addScope('email');

$google_client->addScope ('profile');
 $google_client->setScopes ('https://www.googleapis.com/auth/user.gender.read');
?>
