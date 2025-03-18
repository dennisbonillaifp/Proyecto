<?php
session_start();
require_once("./controladores/Controlador.php");
require_once("./config/Configuracion.php");
$controlador= new Controlador();
$controlador->main();
echo "hola wey";
echo "se me ve??";
<<<<<<< Updated upstream
echo "ahora";

=======
echo "vamos chavales!!";
>>>>>>> Stashed changes

?>
