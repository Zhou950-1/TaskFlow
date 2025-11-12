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