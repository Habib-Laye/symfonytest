<?php

namespace Tests\Entity;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\CodeCoverage\Report\PHP;
use App\Entity\Arme;
 

class ArmeTest extends TestCase{

    public function testcreerArmenom(){

        $Arme = new Arme("épée","Une superbe épée tranchante",10);
        $result = $Arme->creerArme();
        $this->assertSame("nom","Une superbe épée tranchante",10, '$result');
    }

}