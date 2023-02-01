<?php

namespace SmirlTech\LaravelForm\Helpers;


use Illuminate\Support\Str;


class Helpers
{

    public static function modelToFucntionName($value): string
    {
        return lcfirst(static::studly($value));
    }

    public static function studly($value): string
    {

        $words = explode(' ', Str::replace(['.', '_'], ' ', $value));

        $studlyWords = array_map(fn($word) => Str::ucfirst($word), $words);

        return implode($studlyWords);
    }
}
