<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGetSetLibelle()
    {
        $product = new Product();

        $this->assetNull($product->getLibelle());

        $Libelle = 'Pomme';
        $product->setLibelle($Libelle);
        $this->assertEquals($Libelle, $product->getLibelle());
    }
}