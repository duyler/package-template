<?php

declare(strict_types=1);

namespace Duyler\Package\Test\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    #[Test]
    public function as_assert_true()
    {
        $this->assertTrue(true);
    }
}
