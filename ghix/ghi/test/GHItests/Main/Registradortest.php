<?php

namespace GHITest\Login;

use PHPUnit\Framework\TestCase;
use GHI\Main\Registrador;
use GHI\Horario\Funcionario;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Funcionario::class)]

class Registradortest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $Funcionario = new Funcionario();

        $this->assertInstanceOf(Funcionario::class,$Funcionario);

        $Funcionario->horariodechegada = '11:15';
        $Funcionario->horariodeinicio = '11:30';
        
        $this->assertEquals('11:15',$Funcionario->horariodechegada);
        $this->assertEquals('11:30',$Funcionario->horariodeinicio);
        $this->assertEquals(1, $Funcionario->registrarnatabela(tabela));

    }
}