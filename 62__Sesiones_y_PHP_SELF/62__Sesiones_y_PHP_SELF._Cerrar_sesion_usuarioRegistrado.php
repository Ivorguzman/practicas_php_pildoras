<?php
/* `session_start();` es una función de PHP que inicia una sesión nueva o reanuda una existente.
Permite que el servidor almacene datos específicos de un usuario a través de múltiples solicitudes,
como información de inicio de sesión o contenido del carrito de compras. */
session_start();
/* `session_destroy();` es una función de PHP que destruye todos los datos registrados en una sesión.
En otras palabras, borra todas las variables de sesión y finaliza la sesión. */
session_destroy();
/* `header("Ubicación:62__Sesiones_y_PHP_SELF_INCLUDE.php");` es una función de PHP que envía un
encabezado HTTP al navegador, que le indica que redirija a una página diferente. En este caso está
redirigiendo a la página "62__Sesiones_y_PHP_SELF_INCLUDE.php". */
header("Location:62__Sesiones_y_PHP_SELF_INCLUDE.php");

?>
