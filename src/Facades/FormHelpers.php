<?php

namespace imritesh\FormHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class FormHelpers extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'formhelpers';
    }
}
