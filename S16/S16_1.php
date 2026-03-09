<?php
function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.<br>";
}

echo hacer_café();          // Resultado: Hacer una taza de capuchino.
echo hacer_café(null);      // Resultado: Hacer una taza de.
echo hacer_café("espresso"); // Resultado: Hacer una taza de espresso.
?>