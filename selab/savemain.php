<?php
    session_start();

    //$nav = $_POST["nav"];
    $font = $_POST["selectFontFamily"];
    $fontsize = $_POST["selectfontsize"];
    $background = $_POST["selectBackground"];

    $_SESSION['nav'] = 'top';
    $_SESSION['font'] = $font;
    $_SESSION['fontsize'] = $fontsize;
    $_SESSION['bg'] = $background;

    header("Location: ".$_SERVER['HTTP_REFERER']);
?>
