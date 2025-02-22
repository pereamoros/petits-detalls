<?php
define('PRE_BASE_PATH', __DIR__.'/..');
require_once PRE_BASE_PATH.'/config/config.php'; 
require_once BASE_PATH .'/config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuari'];
    $contrasena = $_POST['contrasenya'];
    $error_message = "";
    // Consulta preparada para evitar la inyección SQL
    $stmt = $conn->prepare("SELECT * FROM admin_usuaris WHERE usuari = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $fila = $resultado->fetch_assoc();
        if (sha1($contrasena) === $fila['contrasenya']) {
            session_start();
            $_SESSION['usuario_id'] = $fila['id'];
            header("Location: ./index.php");
            exit();
        } else {
            $error_message = "Contrasenya incorrecta.";
        }
    } else {
        $error_message = "Aquest usuari no existeix.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Petits Detalls</title>
    <meta name="author" content="Petits Detalls">
    <link rel="stylesheet" href="/admin/style.css">
</head>
<body>
    <main>
        <section>
            <div class="container">
                <h1 class="admin-title">Inicia la sessió</h1>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="login-container">
                    <form method="post" action="login.php" class="pill-form pill-form__small">
                        <label for="usuari">Usuari:</label>
                        <input type="text" id="usuari" name="usuari" required>

                        <label for="contrasenya">Contrasenya:</label>
                        <input type="password" id="contrasenya" name="contrasenya" required>

                        <input type="submit" value="Iniciar sesió" />
                    </form>

                    <?php if(!empty($error_message)) { ?>
                        <div class="pill-form pill-form__small">
                            <p><?=$error_message?></p>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>