<?php
    require_once 'config.php';
    $google_client->revokeToken();
    session_destroy();
    header('http://localhost/googleconnect/');
?>