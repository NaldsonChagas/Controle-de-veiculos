<?php
session_start();
function showAlert($tipo)
{
    if (isset($_SESSION[$tipo])) {
        ?>
        <div class="container center-block">
            <p class="text-center alert-<?= $tipo ?>"><?= $_SESSION[$tipo] ?></p>
        </div>
        <?php
    }
    unset($_SESSION[$tipo]);
}

?>