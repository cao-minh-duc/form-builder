<?php

namespace CaoMinhDuc\FormBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CaoMinhDuc\FormBuilder\Skeleton\SkeletonClass
 */
class FormBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form-builder';
    }
}
