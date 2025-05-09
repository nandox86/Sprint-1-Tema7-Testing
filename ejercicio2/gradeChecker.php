<?php
declare(strict_types=1);
/**
 * funcion para verificar el grado de un estudiante segun su nota
 */
function verificarGrado($nota) {
    // valida que la nota sea un numero
    if (!is_numeric($nota)) {
        return "Error: La nota debe ser un número";
    }
    
    // valida rango
    if ($nota < 0 || $nota > 100) {
        return "Error: La nota debe estar entre 0 y 100";
    }
    
    // verifica el grado usando condicionales
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45) {
        return "Segunda División";
    } elseif ($nota >= 33) {
        return "Tercera División";
    } else {
        return "Reprobado";
    }
}
?>