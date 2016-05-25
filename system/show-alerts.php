<?php
session_start();

function showAlert($type)
{
    if (isset($_SESSION[$type])) {
?>
        <p class="text-center alert-<?= $type ?>"><?= $_SESSION[$type] ?></p>
        <?php
    }
    unset($_SESSION[$type]);
}

?>