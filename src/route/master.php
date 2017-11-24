<?php
// MASTER ROUTE

// HOPE PAGE
if($_SERVER['REQUEST_URI'] == '/') {
    require_once CONTROL."/home.php";
    require_once VIEW."/home.php";
}
