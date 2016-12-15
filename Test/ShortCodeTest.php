<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Schedule\ShortCode;

class ShortCodeTest extends TestCase
{
    /** @testdox ShortCode::__construct() with both arguments */
    public function testConstruct()
    {
        $shortcode = new ShortCode('test_sc', [ 'attr' => 'default' ]);

        $this->assertAttributeEquals(
            'test_sc',
            'tag',
            $shortcode
        );

        $this->assertAttributeEquals(
            [ 'attr' => 'default' ],
            'defaults',
            $shortcode
        );
    }

    /** @testdox ShortCode::__construct() with single argument */
    public function testConstructSingleArgument()
    {
        $shortcode = new ShortCode('test_sc');

        $this->assertAttributeEquals(
            'test_sc',
            'tag',
            $shortcode
        );

        $this->assertAttributeEquals(
            [],
            'defaults',
            $shortcode
        );
    }

    /** @testdox ->installed is false by default */
    public function testInstalledDefault()
    {
        $shortcode = new ShortCode('test_sc');

        $this->assertAttributeEquals(
            false,
            'installed',
            $shortcode
        );
    }
}
