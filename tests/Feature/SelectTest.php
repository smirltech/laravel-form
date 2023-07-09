<?php

namespace SmirlTech\LaravelForm\Tests\Feature;


it('can render select with options', function () {
    $view = $this->blade('<x-form::select wire:model="test" :options="[\'a\' => \'A\']" />');
    $view->assertSee('wire:model="test"', false);
    $view->assertSee('<option value="a">A</option>', false);
})->skip();
