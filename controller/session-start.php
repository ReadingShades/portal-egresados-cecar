<?php
session_start();
// If the session vars aren't set, try to set them with a cookie
if (!isset($_SESSION['user-id'])) {
    if (isset($_COOKIE['user-id']) && isset($_COOKIE['username'])) {
        $_SESSION['user-id'] = $_COOKIE['user-id'];
        $_SESSION['username'] = $_COOKIE['username'];
    }
}
