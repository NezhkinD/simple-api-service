<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SimpleTwoTest extends KernelTestCase
{
    public function testTrue(): void
    {
        $this->assertTrue(true);
    }
}