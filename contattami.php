<?php
session_start(); /* serve per avviare la sessione per l'inserimento dati */
$titolo_scheda = "Contattami";
require_once "./php/head.php";
?>
<body>
    <div class="wrapper">
        <?php require_once './php/header.php'; ?>
        <main>
            <div class="form-container">
                <div class="form-header">
                    <h2>Contattami</h2>
                    <p>Per maggiori informazioni o per una collaborazione non esitare a contattarmi!</p>
                </div>
            </div>
            <div class="form-container">
                <?php
                if (isset($_SESSION['message'])) {
                    $messageClass = $_SESSION['message_type'] == 'success' ? 'success' : 'error';
                    echo '<div class="message ' . $messageClass . '">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']);
                    unset($_SESSION['message_type']);
                }
                ?>
                <form action="./php/messaggiform.php" method="POST" novalidate> <!-- usato "post" per non tracciare dati; "novalidate" per disabilitare la validazione del modulo -->
                    <fieldset>
                        <legend>Contattami</legend>
                        <label for="nome"><span></span></label> <!-- per inserimento del "nome"; viene lasciato compilato se corretto, altrimenti tramite 'error-field' viene visualizzato l'errore -->
                        <input type="text" id="nome" name="nome" placeholder="Nome" value="<?php echo isset($_SESSION['data']['nome']) ? htmlspecialchars($_SESSION['data']['nome']) : ''; ?>" class="<?php echo isset($_SESSION['errors']['nome']) ? 'error-field' : ''; ?>">
                        <?php if (isset($_SESSION['errors']['nome'])) echo '<span class="error">' . $_SESSION['errors']['nome'] . '</span>'; ?>
                        <label for="cognome"><span></span></label>
                        <input type="text" id="cognome" name="cognome" placeholder="Cognome" value="<?php echo isset($_SESSION['data']['cognome']) ? htmlspecialchars($_SESSION['data']['cognome']) : ''; ?>" class="<?php echo isset($_SESSION['errors']['cognome']) ? 'error-field' : ''; ?>">
                        <?php if (isset($_SESSION['errors']['cognome'])) echo '<span class="error">' . $_SESSION['errors']['cognome'] . '</span>'; ?>
                        <label for="telefono"><span></span></label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo isset($_SESSION['data']['telefono']) ? htmlspecialchars($_SESSION['data']['telefono']) : ''; ?>" class="<?php echo isset($_SESSION['errors']['telefono']) ? 'error-field' : ''; ?>">
                        <?php if (isset($_SESSION['errors']['telefono'])) echo '<span class="error">' . $_SESSION['errors']['telefono'] . '</span>'; ?>
                        <label for="email"><span></span></label>
                        <input type="email" id="email" name="email" placeholder="E-mail" value="<?php echo isset($_SESSION['data']['email']) ? htmlspecialchars($_SESSION['data']['email']) : ''; ?>" class="<?php echo isset($_SESSION['errors']['email']) ? 'error-field' : ''; ?>">
                        <?php if (isset($_SESSION['errors']['email'])) echo '<span class="error">' . $_SESSION['errors']['email'] . '</span>'; ?>
                        <label for="testo"><span></span></label>
                        <textarea name="testo" id="testo" placeholder="Testo" class="<?php echo isset($_SESSION['errors']['testo']) ? 'error-field' : ''; ?>"><?php echo isset($_SESSION['data']['testo']) ? htmlspecialchars($_SESSION['data']['testo']) : ''; ?></textarea>
                        <?php if (isset($_SESSION['errors']['testo'])) echo '<span class="error">' . $_SESSION['errors']['testo'] . '</span>'; ?>
                        <button type="submit" class="submit-button" id="contattami">Invia</button>
                    </fieldset>
                </form>
                <?php
                unset($_SESSION['errors']); /* rimuovere gli errori dalla sessione per evitare che vengano mostrati */
                unset($_SESSION['data']); /* rimuovere i dati dalla sessione per evitare che vengano mostrati */
                ?>
            </div>
        </main>
        <?php require_once './php/footer.php'; ?>
    </div>
</body>
</html>