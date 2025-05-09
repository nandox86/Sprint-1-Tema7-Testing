<?php
declare(strict_types=1);

class NumberChecker {
    // constructor que recibe un numero entero y lo guarda como propiedad privada
    public function __construct(private int $number){}

    //metodo que verifica si el numero es par
    // devuelv true si el numero es divisible / 2 (resto =0)
    public function isEven(): bool {
        return $this->number % 2 == 0;
    }
    
    // metodo que verifica si el numero es positivo
    //devuelve true si el numero es mayor que 0
    public function isPositive(): bool {
        return $this->number > 0;
    }
}
?>