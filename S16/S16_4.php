<?php
function hacer_yogur($sabor, $tipo = "acidófilo")
{
    return "Hacer un tazón de yogur $tipo de $sabor.<br>";
}

echo hacer_yogur("frambuesa"); // Funciona correctamente
// Resultado: Hacer un tazón de yogur acidófilo de frambuesa.
?>