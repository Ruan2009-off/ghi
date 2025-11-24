<?php

namespace GHItests\Horario;

use PHPUnit\Framework\TestCase;
use GHI\Horario\horario;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(horario::class)]


class horariotest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $horario = new horario();

        $this->assertInstanceOf(horario::class,$horario);
        
        $horario->horariodeinicio = '11:45';
        $horario->horariodefim = '11:45';
        
        $this->assertEquals('11:45',$horario->horariodeinicio);
         $this->assertEquals('11:45',$horario->horariodefim);
         $this->assertIsString($horario->horariodeinicio);



    }
}