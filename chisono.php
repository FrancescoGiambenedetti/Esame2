<?php
$titolo_scheda = "Chi sono"; // impostare "$titolo_scheda" della pagina seguente //
require_once "./php/head.php";
?>
<body>
    <div class="wrapper">
        <?php require_once './php/header.php'; ?>
        <main>
            <section class="riga">
                <div class="colonnaSinistra">
                    <div class="card">
                        <h2>Mi presento</h2>
                        <img src="./img/francesco.jpeg" alt="foto Francesco" title="foto Francesco">
                        <p>Mi chiamo Francesco Giambenedetti e sono classe '98. Sono nato ad Assisi ma attualmente abito a Parma.</p>
                    </div>
                    <div class="card">
                        <h2>Musica</h2>
                        <img src="./img/musica.jpg" alt="foto Musica" title="foto Musica">
                        <p>Sin dall'infanzia ho sempre studiato musica, in particolare batteria e pianoforte. Questo mi ha portato a laurearmi nel 2021 al <a href="https://www.consbo.it/home" title="Conservatorio G.B. Martini" target="_blank">Conservatorio G.B. Martini</a> di Bologna.</p>
                    </div>
                </div>
                <div class="colonnaDestra">
                    <div class="card">
                        <h2>Marketing</h2>
                        <img src="./img/marketing.jpg" alt="foto Marketing" title="foto Marketing">
                        <p>Parallelamente allo studio musicale, dal 2020 lavoro nel mondo del marketing: dapprima nel marketing diretto, ora in quello digitale.</p>
                    </div>
                    <div class="card">
                        <h2>Informatica</h2>
                        <img src="./img/code.jpg" alt="foto Code" title="foto Code">
                        <p>Entrato nel mondo dell'informatica per dare una svolta professionale alla mia carriera, da maggio 2024 sono iscritto all'<a href="https://accademiacode.com/corso-google/?gad_source=1&gclid=EAIaIQobChMIkML_wOufhwMVFpKDBx3xsCQTEAAYASAAEgKl5vD_BwE" title="Accademia CODE" target="_blank">Accademia CODE</a>.</p>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once './php/footer.php'; ?>
    </div>
</body>
</html>