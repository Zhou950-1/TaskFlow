<?php

function formatDate($dateString) {
    $timestamp = strtotime($dateString);
    return date('d/m/Y', $timestamp);
}

function obtenerClasePrioridad($priority) {
    switch ($priority) {
        case 'alta':
            return ' priority-alta';
            break;
        case 'media':
            return ' priority-media';
            break;
        case 'baja':
            return ' priority-baja';
            break;
    }
}

function renderizarTarea($task) {
    $taskClasses = "task-item";

    if ($task['completed'] == true) {
        $taskClasses .= ' completed';
    }

    $taskClasses .= obtenerClasePrioridad($task['priority']);

    return "<li class=\"$taskClasses\">" . htmlspecialchars($task['title']) . "</li>";
}

?>