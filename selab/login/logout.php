<?php
    session_start();
    session_destroy();
    header("Location: http://".$_SERVER['HTTP_HOST']."/renew-web/selab/");
?>
