<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SimpleFailTest extends KernelTestCase
{
    public function testTrue(): void
    {
        $this->assertTrue(false);
    }
}