<?php
$titolo_scheda = "Home Page"; // impostare "$titolo_scheda" della pagina seguente //
require_once "./php/head.php";
?>
<body>
    <div class="wrapper">
        <?php require_once './php/header.php'; ?>
        <main>
            <section class="homepage">
                <h1>Benvenuto</h1>
                <p>Ciao! Mi chiamo Francesco e ti do il benvenuto nel mio primo sito personale!</p>
                <p>Dai un'occhiata alla sezione servizi, in cui troverai i progetti che realizzo e non esitare a contattarmi per qualsiasi informazione.</p>
            </section>
            <section class="linguaggi-usati">
                <h2>Linguaggi usati</h2>
                <a href="https://it.wikipedia.org/wiki/HTML" target="_blank" title="HTML Wikipedia"><img class="main.linguaggi" src="./img/html.png" alt="HTML Logo" title="HTML Logo"></a>
                <a href="https://it.wikipedia.org/wiki/CSS" target="_blank" title="CSS Wikipedia"><img class="main.linguaggi" src="./img/css.png" title="CSS Logo"></a>
                <a href="https://it.wikipedia.org/wiki/PHP" target="_blank" title="PHP Wikipedia"><img class="main.linguaggi" src="./img/php.png" alt="PHP Logo" title="PHP Logo"></a>
            </section>
            <?php require_once './php/social.php'; ?>
        </main>
        <?php require_once './php/footer.php'; ?>
    </div>
</body>
</html>