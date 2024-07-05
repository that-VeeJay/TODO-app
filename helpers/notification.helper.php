<?php
if (!isset($_SESSION)) {
    session_start();
}
function flashMessage($type, $message = null)
{
    if ($message) {
        $_SESSION[$type][] = $message;
    } else {
        if (isset($_SESSION[$type]) && !empty($_SESSION[$type])) {
            foreach ($_SESSION[$type] as $msg) {
                if ($type == 'errors') {
                    echo '<div class="error-container">';
                    echo '<i class="fa-solid fa-circle-exclamation"></i>';
                    echo '<p class="error">' . htmlspecialchars($msg) . '</p>';
                    echo '</div>';
                } elseif ($type == 'success') {
                    echo '<div class="success-message">';
                    echo '<i class="fa-solid fa-check"></i>';
                    echo '<p class="success">' . htmlspecialchars($msg) . '</p>';
                    echo '</div>';
                }
            }
            unset($_SESSION[$type]);
        }
    }
}
