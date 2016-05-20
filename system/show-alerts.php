<?php
session_start();

function showAlert($type)
{
    if (isset($_SESSION[$type])) {
        ?>
        <div class="container center-block">
            <p class="text-center alert-<?= $type ?>"><?= $_SESSION[$type] ?></p>
        </div>
        <?php
    }
    unset($_SESSION[$type]);
}

?>