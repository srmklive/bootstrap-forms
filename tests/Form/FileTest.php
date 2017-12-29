<?php

namespace Srmklive\BootForms\Test\Form;

use PHPUnit\Framework\TestCase;
use Srmklive\BootForms\Form\Elements\File;

class FileTest extends TestCase
{
    use InputContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new File($name);
    }

    protected function getTestSubjectType()
    {
        return 'file';
    }
}
