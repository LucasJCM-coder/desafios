<?php

use PHPUnit\Framework\TestCase;

require_once("src/SequenciaCrescente.php");
class SequenciaCrescenteTest extends TestCase
{
    /** @test */
    public function test_1_valor_na_lista()
    {
        $entrada = [1, 3, 2, 1];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_2_valor_na_lista()
    {
        $entrada = [1, 3, 2];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_3_valor_na_lista()
    {
        $entrada = [1, 2, 1, 2];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_4_valor_na_lista()
    {
        $entrada = [3, 6, 5, 8, 10, 20, 15];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_5_valor_na_lista()
    {
        $entrada = [1, 1, 2, 3, 4, 4];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_6_valor_na_lista()
    {
        $entrada = [1, 4, 10, 4, 2];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_7_valor_na_lista()
    {
        $entrada = [10, 1, 2, 3, 4, 5];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_8_valor_na_lista()
    {
        $entrada = [1, 1, 1, 2, 3];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_9_valor_na_lista()
    {
        $entrada = [0, -2, 5, 6];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_10_valor_na_lista()
    {
        $entrada = [1, 2, 3, 4, 5, 3, 5, 6];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_11_valor_na_lista()
    {
        $entrada = [40, 50, 60, 10, 20, 30];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_12_valor_na_lista()
    {
        $entrada = [1, 1];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_13_valor_na_lista()
    {
        $entrada = [1, 2, 5, 3, 5];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_14_valor_na_lista()
    {
        $entrada = [1, 2, 5, 5, 5];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_15_valor_na_lista()
    {
        $entrada = [10, 1, 2, 3, 4, 5, 6, 1];
        $saida = SequenciaCrescente($entrada);
        $esperado = "FALSE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_16_valor_na_lista()
    {
        $entrada = [1, 2, 3, 4, 3, 6];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_17_valor_na_lista()
    {
        $entrada = [1, 2, 3, 4, 99, 5, 6];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_18_valor_na_lista()
    {
        $entrada = [123, -17, -5, 1, 2, 3, 12, 43, 45];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
    public function test_19_valor_na_lista()
    {
        $entrada = [3, 5, 67, 98, 3];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }

    public function test_somente_1_elemento_no_array()
    {
        $entrada = [33];
        $saida = SequenciaCrescente($entrada);
        $esperado = "TRUE";

        $this->assertEquals($esperado, $saida);
    }
}