<?php

namespace SmirlTech\LaravelForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmirlTech\LaravelForm\LaravelForm
 */
class LaravelForm extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return self::class;
    }
}
