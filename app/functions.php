<?php

function formatDate($dateString) {
    $timestamp = strtotime($dateString);
    return date('d/m/Y', $timestamp);
}

function renderTask($task) {
    // ...lógica para generar el HTML de una tarea...
    return $html;
}

?>