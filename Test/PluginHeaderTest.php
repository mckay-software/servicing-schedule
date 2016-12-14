<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class PluginHeaderTest extends TestCase
{
    /** @testdox Plugin is named appropriately */
    public function test()
    {
        $index = file_get_contents('./index.php');

        $this->assertContains(
            "\n/*\nPlugin Name: Servicing Schedule\n",
            $index
        );
    }
}
