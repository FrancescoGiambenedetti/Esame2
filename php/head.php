<!DOCTYPE html> <!-- file unico per l'head -->
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Giambenedetti">
    <link href="./img/favicon.jpg" title="favicon sito" rel="icon" type="image/x-icon">
    <link href="./css/style.min.css" title="foglio di stile css minifizzato" rel="stylesheet">
    <title><?php echo isset($titolo_scheda) ? $titolo_scheda : "Untitled"; ?></title> <!-- con la variabile "$titolo_scheda" si imposta il nome della singola scheda -->
</head>