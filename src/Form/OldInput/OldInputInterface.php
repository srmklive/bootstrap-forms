<?php

namespace Srmklive\BootForms\Form\OldInput;

interface OldInputInterface
{
    public function hasOldInput();

    public function getOldInput($key);
}
