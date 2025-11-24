<?php

namespace GHItests\Horario;

use PHPUnit\Framework\TestCase;
use GHI\Horario\Materia;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Materia::class)]


class MateriaTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $Materia = new Materia();

        $this->assertInstanceOf(Materia::class,$Materia);
        
        $Materia->nome = 'Portugues';
        
        $this->assertEquals('Portugues',$Materia->nome);
        $this->assertEquals(1, $Materia->inserirnatabela($tabela));
        $this->assertIsString($Materia->nome);


    }
}