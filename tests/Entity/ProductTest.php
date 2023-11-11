<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Promotion;
use App\Entity\Admin;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGetId()
    {
        $product = new Product();
        $this->assertNull($product->getId());
    }

    public function testGetSetLibelle()
    {
        $product = new Product();

        $this->assertNull($product->getLibelle());

        $Libelle = 'Pomme';
        $product->setLibelle($Libelle);
        $this->assertEquals($Libelle, $product->getLibelle());
    }

    public function testGetSetDescription()
    {
        $product = new Product();

        $this->assertNull($product->getDescription());

        $Description = 'C\'est une pomme';
        $product->setDescription($Description);
        $this->assertEquals($Description, $product->getDescription());
    }

    public function testGetSetPrice()
    {
        $product = new Product();

        $this->assertNull($product->getPrice());

        $Price = 20.00;
        $product->setPrice($Price);
        $this->assertEquals($Price, $product->getPrice());
    }

    public function testGetSetCategory()
    {
        $product = new Product();
        $this->assertNull($product->getCategory());

        $category = new Category();
        $product->setCategory($category);
        $this->assertEquals($category, $product->getCategory());
    }

    public function testGetSetPromotion()
    {
        $product = new Product();
        $this->assertNull($product->getPromotion());

        $promotion = new Promotion();
        $product->setPromotion($promotion);
        $this->assertEquals($promotion, $product->getPromotion());
    }

    public function testGetSetAdmin()
    {
        $product = new Product();
        $this->assertNull($product->getAdmin());

        $admin = new Admin();
        $product->setAdmin($admin);
        $this->assertEquals($admin, $product->getAdmin());
    }
}