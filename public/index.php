<?php
    require '../app/functions.php';

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

            $taskClasses = "task-item";

            if ($task['completed'] == true) {
                $taskClasses .= ' completed';
            }

            switch ($task['priority']) {
                case 'alta':
                    $taskClasses .= ' priority-alta';
                    break;
                case 'media':
                    $taskClasses .= ' priority-media';
                    break;
                case 'baja':
                    $taskClasses .= ' priority-baja';
                    break;
            }
                    
        ?>
        <!--Así se añaden clases dinámicamente a un HTML con PHP, para el CSS-->
        <li class="<?php echo $taskClasses; ?>">
            <?php echo htmlspecialchars($task['title']); ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php' ?>

        