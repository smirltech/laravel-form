<?php

namespace SmirlTech\LaravelForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmirlTech\LaravelForm\LaravelMedia
 */
class LaravelMedia extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmirlTech\LaravelForm\LaravelMedia::class;
    }
}
