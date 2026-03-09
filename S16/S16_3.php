<?php
// Esto NO funcionará como se espera
function hacer_yogur($tipo = "acidófilo", $sabor)
{
    return "Hacer un tazón de yogur $tipo de $sabor.<br>";
}

echo hacer_yogur("frambuesa"); // Lanza un Fatal error: ArgumentCountError
?>