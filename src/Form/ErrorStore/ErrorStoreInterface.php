<?php

namespace Srmklive\BootForms\Form\ErrorStore;

interface ErrorStoreInterface
{
    public function hasError($key);

    public function getError($key);
}
