<?php

function formatDate($dateString) {
    $timestamp = strtotime($dateString);
    return date('d/m/Y', $timestamp);
}

function obtenerClasePrioridad($prioridad) {
    switch ($prioridad) {
        case 'alta':
            return ' prioridad-alta';
            break;
        case 'media':
            return ' prioridad-media';
            break;
        case 'baja':
            return ' prioridad-baja';
            break;
        default:
            return '';
            break;
    }
}

function renderizarTarea($tarea) {
    $claseEstilos = "objeto-tarea";

    if ($tarea['completado'] == true) {
        $claseEstilos .= ' completado';
    }

    $claseEstilos .= obtenerClasePrioridad($tarea['prioridad']);

    return "<li class=\"$claseEstilos\">" . htmlspecialchars($tarea['titulo']) . "</li>";
}

?>