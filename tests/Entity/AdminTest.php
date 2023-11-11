<?php

namespace App\Tests\Entity;

use App\Entity\Admin;
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    public function testGetId()
    {
        $admin = new Admin();
        $this->assertNull($admin->getId());
    }

    public function testGetSetUsername()
    {
        $admin = new Admin();
        $this->assertNull($admin->getUsername());

        $username = "admin";
        $admin->setUsername($username);
        $this->assertEquals($admin->getUsername(), $username);
    }

    public function testGetSetRoles()
    {
        $admin = new Admin();

        $roles = ["ROLE_ADMIN"];
        $admin->setRoles($roles);
        $this->assertEquals(array_merge($roles, ["ROLE_USER"]), $admin->getRoles());
    }
}