<?php
declare(strict_types=1);

//phpunit para nuestros tests
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/gradeChecker.php';

//clase de test para verificar la funcionalidad de verificacion de grados
class GradeCheckerTest extends TestCase
{
    //test para verificar primera division (nota >= 60)
    public function testPrimeraDivision(): void
    {
        // probamos con el valor minimo (60)
        $this->assertEquals("Primera División", verificarGrado(60));
        
        //probamos con un valor intermedio
        $this->assertEquals("Primera División", verificarGrado(75));
        
        //probamos con el valor maximo (100)
        $this->assertEquals("Primera División", verificarGrado(100));
    }
    
    // test para verificar segunda division (45 <= nota < 60)
    public function testSegundaDivision(): void
    {
        //probamos con el valor minimo (45)
        $this->assertEquals("Segunda División", verificarGrado(45));
        
        // probamos con un valor intermedio
        $this->assertEquals("Segunda División", verificarGrado(50));
        
        // probamos con el valor maximo (59.9)
        $this->assertEquals("Segunda División", verificarGrado(59.9));
    }
    
    // test para verificar tercera division (33 <= nota < 45)
    public function testTerceraDivision(): void
    {
        // probamos con el valor minimo (33)
        $this->assertEquals("Tercera División", verificarGrado(33));
        
        // probamos con un valor intermedio
        $this->assertEquals("Tercera División", verificarGrado(40));
        
        // probamos con el valor maximo (44.9)
        $this->assertEquals("Tercera División", verificarGrado(44.9));
    }
    
    // test para verificar reprobado (nota < 33)
    public function testReprobado(): void
    {
        // probamos con el valor minimo (0)
        $this->assertEquals("Reprobado", verificarGrado(0));
        
        // probamos con un valor intermedio
        $this->assertEquals("Reprobado", verificarGrado(15));
        
        // probamos con el valor maximo (32.9)
        $this->assertEquals("Reprobado", verificarGrado(32.9));
    }
    
    // test para verificar validacion de rango (0-100)
    public function testValidacionRango(): void
    {
        // probamos con un valor menor que 0
        $this->assertEquals("Error: La nota debe estar entre 0 y 100", verificarGrado(-1));
        
        // probamos con un valor mayor que 100
        $this->assertEquals("Error: La nota debe estar entre 0 y 100", verificarGrado(101));
    }
    
    // test para verificar que la nota sea un numero
    public function testValidacionTipo(): void
    {
        // probamos con un string
        $this->assertEquals("Error: La nota debe ser un número", verificarGrado("abc"));
    }
}
?>