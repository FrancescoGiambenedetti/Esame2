<?php
function setActiveClass($pageName) /* procedura per ottenere il nome della scheda attuale ed applicare il "selected" e rendere visibile la pagina aperta nel menù tramite css */
{
    $currentFileName = basename($_SERVER['PHP_SELF']);
    return $currentFileName === $pageName ? 'active' : '';
}
?>
<header>
    <nav class="hamburger-menu">
        <input type="checkbox" id="controllo">
        <label class="label-controllo" for="controllo">
            <span></span>
        </label>
        <a href="#" class="logo"><img src="./img/logo.png" alt="Logo" title="Logo"></a>
        <ul id="menu">
            <li><a href="index.php" title="Home Page" class="<?php echo setActiveClass('index.php'); ?>">Home</a></li>
            <li><a href="chisono.php" title="Chi Sono" class="<?php echo setActiveClass('chisono.php'); ?>">Chi sono</a></li>
            <li><a href="servizi.php" title="Servizi" class="<?php echo setActiveClass('servizi.php'); ?>">Servizi</a></li>
            <li><a href="contattami.php" title="Contattami" class="<?php echo setActiveClass('contattami.php'); ?>">Contattami</a></li>
        </ul>
    </nav>
</header>