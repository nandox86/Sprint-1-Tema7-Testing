<?php
declare(strict_types=1);

// usar phpunit para crear la clase de test
use PHPUnit\Framework\TestCase;

// importar la clase 
require_once __DIR__ .'/../numberChecker.php';

// creamos una clase que extiende de Testcase para nuestros tests
class NumberCheckerTest extends TestCase
{
    //test para verificar que iseven devuelve true con numeros pares
    public function testIsEvenWithEvenNumber(): void
    {
        // creamos un objeto Numberchecker con un numero par (2)
        $checker = new NumberChecker(2);
        
        // verific que iseven devuelve true
        $this->assertTrue($checker->isEven());
    }
    
    //test para verifikr que iseven devuelve falso con numeros impares
    public function testIsEvenWithOddNumber(): void
    {
        // objeto Numberchecker con un número impar (3)
        $checker = new NumberChecker(3);
        
        // verificamos que iseven devuelve false
        $this->assertFalse($checker->isEven());
    }
    
    //test para verificar que ispositive devuelve true con numeros positivos
    public function testIsPositiveWithPositiveNumber(): void
    {
        //un objeto numberChecker con un numero positivo (5)
        $checker = new NumberChecker(5);
        
        //verifica que ispositive devuelve true
        $this->assertTrue($checker->isPositive());
    }
    
    //test para verificar que ispositive devuelve falso con numeros negativos
    public function testIsPositiveWithNegativeNumber(): void
    {
        //creamos un objeto numberchecker con un numero negativo (-5)
        $checker = new NumberChecker(-5);
        
        // verificamos que ispositive devuelve false
        $this->assertFalse($checker->isPositive());
    }
    
    //test para verificar que isPositive devuelve false con cero
    public function testIsPositiveWithZero(): void
    {
        // crear  objeto Numberchecker con 0
        $checker = new NumberChecker(0);
        
        //verificamos que ispositive devuelve falso (0 no es positivo)
        $this->assertFalse($checker->isPositive());
    }
}
?>