<?php
session_start(); /* serve per avviare la sessione per l'inserimento dati */
if ($_SERVER["REQUEST_METHOD"] == "POST") { /* imposta la tipologia di richiesta dati (utilizzato "POST" per la sicurezza dei dati non visibili) */
    $errors = []; /* creazione di array vuoto per memorizzare eventuali messaggi d'errore */
    $data = [];
    foreach (['nome', 'cognome', 'telefono', 'email', 'testo'] as $field) { /* inizio ciclo "for each" */
        if (empty($_POST[$field])) { /* verifica che i campi non siano vuoti */
            $errors[$field] = "$field obbligatorio"; /* se il campo è vuoto, stampa a video "obbligatorio" */
        } else {
            $data[$field] = htmlspecialchars($_POST[$field]); /* se il campo non è vuoto memorizza i dati; "htmlspecialchars" serve per convertire i caratteri speciali */
        }
    }
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) { /* verifica che la mail sia valida */
        $errors['email'] = "indirizzo non valido";
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors; /* dati ed errori vengono memorizzati e l'utente viene rimandato alla pagina "contattami.php" */
        $_SESSION['data'] = $data;
        header('Location: ../contattami.php');
        exit; /* termina l'esecuzione dell'algoritmo */
    }
    $dataString = "Nome: {$data['nome']}\nCognome: {$data['cognome']}\nTelefono: {$data['telefono']}\nEmail: {$data['email']}\nTesto: {$data['testo']}\n\n";
    $file = '../messaggiformtxt/messaggiform.txt';
    if (!$fp = fopen($file, 'a')) {
        $_SESSION['message'] = "C'è stato un problema, contattami in altro modo!";
        $_SESSION['message_type'] = 'error';
        header('Location: ../contattami.php');
        exit;
    }
    if (fwrite($fp, $dataString) === FALSE) {
        $_SESSION['message'] = "C'è stato un problema, contattami in altro modo!";
        $_SESSION['message_type'] = 'error';
        header('Location: ../contattami.php');
        exit;
    }
    $_SESSION['message'] = "Il tuo messaggio è stato inviato!";
    $_SESSION['message_type'] = 'success';
    fclose($fp);
    header('Location: ../contattami.php');
    exit;
}