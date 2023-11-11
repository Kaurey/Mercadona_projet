<?php

namespace App\Tests\Entity;

use App\Entity\Category;
use App\Entity\Admin;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testGetId()
    {
        $category = new Category();
        $this->assertNull($category->getId());
    }

    public function testGetSetLibelle()
    {
        $category = new Category();
        
        $this->assertNull($category->getLibelle());

        $Libelle = "Fruit";
        $category->setLibelle($Libelle);
        $this->assertEquals($Libelle, $category->getLibelle());
    }

    public function testGetSetAdmin()
    {
        $category = new Category();
        $this->assertNull($category->getAdmin());

        $admin = new Admin();
        $category->setAdmin($admin);
        $this->assertEquals($admin, $category->getAdmin());
    }

    public function testToString()
    {
        $category = new Category();
        $Libelle = "Sport";
        $category->setLibelle($Libelle);
        $this->assertEquals("Sport", $category->__toString());
    }
}