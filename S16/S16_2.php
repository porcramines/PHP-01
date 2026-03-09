<?php
function hacer_café($tipos = array("capuchino"), $fabricanteCafé = NULL)
{
    $aparato = is_null($fabricanteCafé) ? "las manos" : $fabricanteCafé;
    return "Hacer una taza de " . implode(", ", $tipos) . " con $aparato.<br>";
}

echo hacer_café(); // Resultado: Hacer una taza de capuchino con las manos.
echo hacer_café(array("capuchino", "lavazza"), "una tetera"); // Resultado: Hacer una taza de capuchino, lavazza con una tetera.
?>