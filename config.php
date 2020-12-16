<?php

//config.php

//Incluir biblioteca cliente do Google para arquivo de carregamento automático de PHP
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Faça objeto do cliente API do Google para chamar a API do Google
$google_client->setClientId('121673511036-rr1v2fjnr87g6oqni9tepfdv3ul7gr7k.apps.googleusercontent.com');

//Defina a chave secreta do cliente OAuth 2.0
$google_client->setClientSecret('Y4Zo9Q8H6RQ_TvfxLnSComEo');

//Defina o URI de redirecionamento OAuth 2.0
$google_client->setRedirectUri('http://localhost/oauth2/google.php');

//Define o escopo email
$google_client->addScope('email');

//Define o escopo perfil
$google_client->addScope('profile');

//Iniciar sessão na página da web
session_start();

?>