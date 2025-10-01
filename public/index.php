<?php
    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio"; // el punto . sirve para concatenar en PHP

    $userName = "Zhou Zhihui"; // Tipo String
    $userAge = 20;             // Tipo Integer
    $isPremiumUser = true;     // Tipo Boolean
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        <main>
        <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
    </main>
    </body>
</html>