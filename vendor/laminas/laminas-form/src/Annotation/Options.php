<?php

namespace Laminas\Form\Annotation;

/**
 * Options annotation
 *
 * Allows passing element, fieldset, or form options to the form factory.
 * Options are used to alter the behavior of the object they address.
 *
 * The value should be an associative array.
 *
 * @Annotation
 */
class Options extends AbstractArrayAnnotation
{
    /**
     * Retrieve the options
     *
     * @return null|array
     */
    public function getOptions()
    {
        return $this->value;
    }
}
