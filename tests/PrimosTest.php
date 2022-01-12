<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("src/Primos.php");

class PrimosTest extends TestCase {

/** @test */
public function test_se_validaPrimo_retorna_true_no_input_7()
{
    $entrada = 7;
    $saida = ValidaPrimo($entrada);

    $this->assertTrue($saida);
}

public function test_se_validaPrimo_retorna_false_no_input_9()
{
    $entrada = 9;
    $saida = ValidaPrimo($entrada);

    $this->assertFalse($saida);
}

public function test_se_validaPrimo_retorna_false_no_input_99232()
{
    $entrada = 99232;
    $saida = ValidaPrimo($entrada);

    $this->assertFalse($saida);
}

public function test_se_validaPrimo_retorna_false_no_input_1()
{
    $entrada = 1;
    $saida = ValidaPrimo($entrada);

    $this->assertFalse($saida);
}

public function test_se_validaPrimo_retorna_true_no_input_2()
{
    $entrada = 2;
    $saida = ValidaPrimo($entrada);

    $this->assertTrue($saida);
}


}