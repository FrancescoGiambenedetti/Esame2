<?php
$portfolioJson = file_get_contents('./json/portfolio.json'); /* richiama il file .json */
$portfolio = json_decode($portfolioJson, true);
$titolo_scheda = "Servizi"; // impostare "$titolo_scheda" della pagina seguente //
require_once "./php/head.php";
?>
<body>
    <div class="wrapper">
        <?php require_once './php/header.php'; ?>
        <main>
            <section class="servizi">
                <h1>Servizi offerti</h1>
                <ul class="servizi-list">
                    <li class="servizi-item">
                        <h2>Costruzione siti</h2>
                        <img src="./img/sito.jpg" alt="foto Sito" title="foto Sito">
                        <p>Se sei un'azienda che necessita di un sito internet per farsi pubblicità!</p>
                    </li>
                    <li class="servizi-item">
                        <h2>Web Design</h2>
                        <img src="./img/webdesign.jpg" alt="foto Web Design" title="foto Web Design">
                        <p>L'aspetto grafico è il bigliettino da visita per il servizio che vendi: curalo al meglio!</p>
                    </li>
                </ul>
            </section>
            <section class="portfolio">
                <h1>Portfolio</h1>
                <ul class="portfolio-list">
                    <?php foreach ($portfolio as $work): ?> <!-- utilizzato ciclo "for each" per generare dinamicamente la lista di elementi -->
                        <li class="portfolio-item">
                            <a href="dettaglio.php?id=<?php echo $work['id']; ?>" title="<?php echo $work['title']; ?>"> <!-- riprende i dati inseriti nel .json -->
                                <img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>">
                                <h2><?php echo $work['title']; ?></h2>
                            </a>
                        </li>
                    <?php endforeach; ?> <!-- fine ciclo "for each" -->
                </ul>
            </section>
        </main>
        <?php require_once './php/footer.php'; ?>
    </div>
</body>
</html>