<?php

namespace Srmklive\BootForms\Elements;

use Srmklive\BootForms\Form\Elements\Element;

class HelpBlock extends Element
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
        $this->addClass('help-block');
    }

    public function render()
    {
        $html = '<p';
        $html .= $this->renderAttributes();
        $html .= '>';
        $html .= $this->message;
        $html .= '</p>';

        return $html;
    }
}
