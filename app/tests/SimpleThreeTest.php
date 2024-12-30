<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SimpleThreeTest extends KernelTestCase
{
    public function testTrue(): void
    {
        $this->assertTrue(true);
    }
}