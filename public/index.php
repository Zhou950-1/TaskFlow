<?php
    require_once '../app/functions.php';

    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio"; // el punto . sirve para concatenar en PHP

    $tareas = [
        ['titulo' => 'tarea 1', 'completado' => true, 'prioridad' => 'alta'],
        ['titulo' => 'tarea 2', 'completado' => false, 'prioridad' => 'baja'],
        ['titulo' => 'tarea 3', 'completado' => false, 'prioridad' => 'media'],
        ['titulo' => 'tarea 4', 'completado' => true, 'prioridad' => 'baja'],
        ['titulo' => 'tarea 5', 'completado' => true, 'prioridad' => 'alta']
    ];
?>

<?php include '../app/views/header.php' ?>

<h2>Tareas Pendientes</h2>
<p class="date-display"><?php echo formatDate("2025-10-15"); ?></p>
<ul>
    <?php foreach ($tareas as $tarea): ?>
        <?php 

            echo renderizarTarea($tarea);
                    
        ?>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php' ?>

        