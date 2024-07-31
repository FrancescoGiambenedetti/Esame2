<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID del lavoro non valido');
}
$id = $_GET['id'];
$portfolioJson = file_get_contents('./json/portfolio.json');
if ($portfolioJson === false) {
    die('Errore nel caricamento del file JSON');
}
$portfolio = json_decode($portfolioJson, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Errore nella lettura del file JSON');
}
$work = null;
foreach ($portfolio as $item) {
    if ($item['id'] == $id) {
        $work = $item;
        break;
    }
}
if ($work === null) {
    die('Lavoro non trovato');
}
$titolo_scheda = $work['title'];
require_once "./php/head.php";
?>
<body>
    <div class="wrapper">
        <?php require_once './php/header.php'; ?>
        <main>
            <section class="dettaglio-lavoro">
                <div class="left">
                    <h1><?php echo $work['title']; ?></h1>
                    <img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>">
                </div>
                <div class="right">
                    <h3><?php echo $work['description']; ?></h3>
                    <br>
                    <p><strong>Data progetto:</strong> <?php echo $work['date']; ?></p>
                    <p><strong>Cliente:</strong> <?php echo $work['client']; ?></p>
                    <p><strong>P.IVA:</strong> <?php echo $work['piva']; ?></p>
                    <p><strong>Valutazione:</strong> <?php echo $work['rating']; ?></p>
                    <br>
                    <a href="<?php echo $work['link']; ?>" target="_blank" title="Visita il sito">Visita il sito</a>
                    <br>
                    <br>
                    <a href="servizi.php" title="Torna ai progetti">Torna ai progetti</a>
                </div>
                <br>
            </section>
        </main>
        <?php require_once './php/footer.php'; ?>
    </div>
</body>
</html>