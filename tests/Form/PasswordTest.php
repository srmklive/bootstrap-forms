<?php

namespace Srmklive\BootForms\Test\Form;

use PHPUnit\Framework\TestCase;
use Srmklive\BootForms\Form\Elements\Password;

class PasswordTest extends TestCase
{
    use TextSubclassContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Password($name);
    }

    protected function getTestSubjectType()
    {
        return 'password';
    }
}
