<?php
require_once 'functions.php';
// prendere il valore che e' stato inviato.
// se ce trasformalo in intero e assegnalo altrimenti assegna un valore di default
$password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : 5;

// per sapere se il form e' stato inviato
$form_sent = !empty($_GET);

// se il form e' stato inviato
if ($form_sent) {
    
    // inizializzo la sessione
    session_start();

// genero una password della lunghezza specificata e la salvo in sessione
    $_SESSION['generated_password'] = generate_password($password_length);

    // porto l'utente alla pagina del risultato
    header(('location: ./result.php'));
};