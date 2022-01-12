<?php

use PHPUnit\Framework\TestCase;

require_once("src/SeculoAno.php");

class SeculoAnoTest extends TestCase {
    public function test_ao_por_ano_2021_deve_retornar_o_seculo_21()
    {
        $entrada = 2021;
        $esperado = 21;
        
        $saida = SeculoAno($entrada);
        $this->assertSame($esperado, $saida);
    }
    
    public function test_ao_por_ano_2020_deve_retornar_o_seculo_20()
    {
        $entrada = 2000;
        $esperado = 20;
        
        $saida = SeculoAno($entrada);
        $this->assertSame($esperado, $saida);
    }

    public function test_ao_por_ano_100_deve_retornar_o_seculo_1()
    {
        $entrada = 100;
        $esperado = 1;
        
        $saida = SeculoAno($entrada);
        $this->assertSame($esperado, $saida);
    }

    public function test_ao_por_ano_1_deve_retornar_o_seculo_1()
    {
        $entrada = 1;
        $esperado = 1;
        
        $saida = SeculoAno($entrada);
        $this->assertSame($esperado, $saida);
    }

    public function test_ao_por_ano_negativo_deve_retornar_0()
    {
        $entrada = -12;
        $esperado = 0;
        
        $saida = SeculoAno($entrada);
        $this->assertSame($esperado, $saida);
  }


  public function test_ao_por_ano_com_letras_deve_retornar_0()
  {
      $entrada = -12;
      $esperado = 0;
      
      $saida = SeculoAno($entrada);
      $this->assertSame($esperado, $saida);
  }

  
}