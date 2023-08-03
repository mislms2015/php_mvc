<?php
/**
 * Helper to check if user needs to redirect
 */

function checkOwner($id, $redirect) {
    if ($id != $_SESSION['user_id']) {
        redirect($redirect);
    }
}