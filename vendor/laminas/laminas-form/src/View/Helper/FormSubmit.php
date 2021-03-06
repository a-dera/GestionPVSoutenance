<?php

namespace Laminas\Form\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\Exception;

class FormSubmit extends FormInput
{
    /**
     * Attributes valid for the input tag type="submit"
     *
     * @var array
     */
    protected $validTagAttributes = [
        'name'           => true,
        'autofocus'      => true,
        'disabled'       => true,
        'form'           => true,
        'formaction'     => true,
        'formenctype'    => true,
        'formmethod'     => true,
        'formnovalidate' => true,
        'formtarget'     => true,
        'type'           => true,
        'value'          => true,
    ];

    /**
     * Translatable attributes
     *
     * @var array
     */
    protected $translatableAttributes = [
        'value' => true,
    ];

    /**
     * Determine input type to use
     *
     * @param  ElementInterface $element
     * @throws Exception\DomainException
     * @return string
     */
    protected function getType(ElementInterface $element)
    {
        return 'submit';
    }
}
