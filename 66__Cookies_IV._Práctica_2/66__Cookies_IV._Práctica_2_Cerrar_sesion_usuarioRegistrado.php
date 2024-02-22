<?php
/* `session_start();` es una función de PHP que inicia una sesión nueva o reanuda una existente.
Permite que el servidor almacene datos específicos de un usuario a través de múltiples solicitudes,
como información de inicio de sesión o contenido del carrito de compras. */
session_start();
/* `session_destroy();` es una función de PHP que destruye todos los datos registrados en una sesión.
En otras palabras, borra todas las variables de sesión y finaliza la sesión. */
session_destroy();

/* La función `header` se utiliza para enviar un encabezado HTTP sin procesar al cliente. En este
código específico, se utiliza para redirigir al usuario a la página
"66__Cookies_IV._Práctica_2_INCLUDE.php" luego de que la sesión haya sido destruida. */
header("Location:66__Cookies_IV._Práctica_2_INCLUDE.php");

?>
