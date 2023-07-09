<?php

namespace SmirlTech\LaravelForm\Tests\Feature;


it('can render input', function () {
    $view = $this->blade('<x-form::input name="test" />');
    $view->assertSee('name="test"', false);
});
