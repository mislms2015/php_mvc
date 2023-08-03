<?php
/**
 * Start session
 * This needs to be start in order for the application to use session
 * This will be trigger from the start of application
 */

session_start();

// Flash message helper
// Example: flash('register_success', 'Your're not registered', 'alert alert-danger');
// Display in view: echo flash('register_success);
function flash($name = '', $message = '', $class = 'alert alert-success') {
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if (!empty($_SESSION[$name. '_class'])) {
                unset($_SESSION[$name. '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name. '_class'] = $class;
        } else if (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
            
            echo '<div class="' .$class. '" id="msg-flash">' .$_SESSION[$name]. '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name. '_class']);
        }
    }
}

function isLoggedIn() {
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}