<?php

namespace Srmklive\BootForms\Test\Form;

use PHPUnit\Framework\TestCase;
use Srmklive\BootForms\Form\Elements\Hidden;

class HiddenTest extends TestCase
{
    use InputContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Hidden($name);
    }

    protected function getTestSubjectType()
    {
        return 'hidden';
    }
}
