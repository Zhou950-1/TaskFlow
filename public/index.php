<?php
    require_once '../app/functions.php';

    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio"; // el punto . sirve para concatenar en PHP

    $tasks = [
        ['title' => 'tarea 1', 'completed' => true, 'priority' => 'alta'],
        ['title' => 'tarea 2', 'completed' => false, 'priority' => 'baja'],
        ['title' => 'tarea 3', 'completed' => false, 'priority' => 'media'],
        ['title' => 'tarea 4', 'completed' => true, 'priority' => 'baja'],
        ['title' => 'tarea 5', 'completed' => true, 'priority' => 'alta']
    ];
?>

<?php include '../app/views/header.php' ?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php echo formatDate("2025-10-15"); ?>
    <?php foreach ($tasks as $task): ?>
        <?php 

            echo renderizarTarea($task);
                    
        ?>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php' ?>

        