<?php

namespace Srmklive\BootForms\Test;

use Srmklive\BootForms\Elements\HelpBlock;

class HelpBlockTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
    }

    public function testCanRenderBasicHelpBlock()
    {
        $helpBlock = new HelpBlock('Email is required.');

        $expected = '<p class="help-block">Email is required.</p>';
        $result = $helpBlock->render();
        $this->assertEquals($expected, $result);

        $helpBlock = new HelpBlock('First name is required.');

        $expected = '<p class="help-block">First name is required.</p>';
        $result = $helpBlock->render();
        $this->assertEquals($expected, $result);
    }
}
