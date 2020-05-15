<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_correct_title()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }
}
