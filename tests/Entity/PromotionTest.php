<?php

namespace App\Tests\Entity;

use App\Entity\Promotion;
use App\Entity\Product;
use App\Entity\Admin;
use PHPUnit\Framework\TestCase;

class PromotionTest extends TestCase
{
    /*public function testGetSetStartDate()
    {
        $promotion = new Promotion();

        $this->assertNull($promotion->getStartDate());

        $promotion->setStartDate(new \DateTime("11/11/2023"));
        $this->assertEquals("11/11/2023", $promotion->getStartDate());
    }*/

    public function testGetId()
    {
        $promotion = new Promotion();
        $this->assertNull($promotion->getId());
    }

    public function testGetSetPercentage()
    {
        $promotion = new Promotion();

        $this->assertNull($promotion->getPercentage());


        $percentage = 20.00;
        $promotion->setPercentage($percentage);
        $this->assertEquals($percentage, $promotion->getPercentage());
    }

    public function testGetSetProduct()
    {
        $promotion = new Promotion();
        $this->assertNull($promotion->getProduct());

        $product = new Product();
        $promotion->setProduct($product);
        $this->assertEquals($product, $promotion->getProduct());
    }

    public function testGetSetAdmin()
    {
        $promotion = new Promotion();
        $this->assertNull($promotion->getAdmin());

        $admin = new Admin();
        $promotion->setAdmin($admin);
        $this->assertEquals($admin, $promotion->getAdmin());
    }
}
