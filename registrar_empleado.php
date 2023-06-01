
 <!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
</head>

<body>

    <div class="display" id="modal">
        <div class="modal-content">
        <h2>Se registro correctamente</h2>
                        <div class="close" id="close">
                            <p>Registrar otro usuario</p>
                        </div>
        </div>
    </div>
<div class="display_full display_background_admin">
    <div class="admin_background_container login_container">
        <div class="login-titulo">Admin Register</div>
        <form id="registroForm" class="login-form" action="recepcion_de_datos.php" method="post" >
            <input class="login-input" type="text" name="user" placeholder="Username" required>
            <input class="login-input" type="password" name="pass" placeholder="Password" required >
            <input class="login-btn" type="submit" value="Registrar"  id="openModal">
            <a class="admin_menu" href="inicio.php">Menu</a>
        </form>
    </div>
    </div>
    </div>
    <script src="modal.js"></script>
</body>
</html> 