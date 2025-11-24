<?php

namespace GHItests\Horario;

use PHPUnit\Framework\TestCase;
use GHI\Horario\Aula;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Aula::class)]


class Aulatest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $Aula = new Aula();

        $this->assertInstanceOf(Aula::class,$Aula);
        
        $Aula->horariodefim = '18:10';
        $Aula->materia = 'Portugues';
        
        $this->assertEquals('18:10',$Aula->horariodefim);
        $this->assertEquals('Portugues',$Aula->materia);
        $this->assertEquals(1, $Aula->Pesquisar(tabela));
        $this->assertIsCallable($Aula->Pesquisar(tabela));

    }
}