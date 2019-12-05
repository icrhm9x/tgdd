<?php
function insertHeadLink() {
    $link = "";
    $link .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></link>';
    $link .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
    $link .= insertCSS('/tgdd/common/css/style.css');
    echo $link;
}
function insertCSS($fileName) {
    echo '<link rel="stylesheet" href="'.$fileName.'?_rev=' . filemtime($_SERVER['DOCUMENT_ROOT'].''.$fileName) . '" />';
}
function insertJS($fileName) {
    echo '<script src="'.$fileName.'?_rev=' . filemtime($_SERVER['DOCUMENT_ROOT'].''.$fileName) . '" defer></script>';
}
?>