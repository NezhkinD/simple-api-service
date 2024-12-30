<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SimpleFourTest extends KernelTestCase
{
    public function testTrue(): void
    {
        $this->assertTrue(true);
    }
}