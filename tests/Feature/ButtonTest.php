<?php

namespace SmirlTech\LaravelForm\Tests\Feature;

use SmirlTech\LaravelForm\Tests\TestCase;


class ButtonTest extends TestCase
{
    public function test_button_render()
    {
        $view = $this->blade('<x-form::button>Clique me</x-form::button>');
        $view->assertSeeText('Clique me');
        $view->assertSee('btn-default');
    }

    public function test_button_size()
    {
        $view = $this->blade('<x-form::button size="lg">Clique me lg</x-form::button>');
        $view->assertSeeText("Clique me lg");
        $view->assertSee('btn-lg');
    }

    public function test_disabled_size()
    {
        $view = $this->blade('<x-form::button disabled size="lg">Clique me</x-form::button>');
        $view->assertSeeText("Clique me");
        $view->assertSee('disabled');
    }

    public function test_button_theme()
    {
        $view = $this->blade('<x-form::button theme="secondary" size="lg">Clique me</x-form::button>');
        $view->assertSee('btn-secondary');

        $view = $this->blade('<x-form::button theme="danger" size="lg">Clique me</x-form::button>');
        $view->assertSee('btn-danger');
    }

    public function test_outlined_button_theme()
    {
        $view = $this->blade('<x-form::button theme="primary" outlined size="lg">Clique me</x-form::button>');
        $view->assertDontSee('btn-primary');
        $view->assertSee('btn-outline-primary');

        $view = $this->blade('<x-form::button theme="danger" outlined size="lg">Clique me</x-form::button>');
        $view->assertSee('btn-outline-danger');
    }

    public function test_button_custom_attribues()
    {
        $view = $this->blade('<x-form::button theme="secondary" size="lg" title="A title">Clique me</x-form::button>');
        $view->assertSee('title="A title"', false);

        $view = $this->blade('<x-form::button theme="secondary" size="lg" title="A title" ondrag="customDrag">Clique me</x-form::button>');
        $view->assertSee('title="A title"', false);
        $view->assertSee('ondrag="customDrag"', false);
    }

    public function test_primary_button()
    {
        $view = $this->blade('<x-form::button.primary size="lg" title="Jean">Clique me primary</x-form::button.primary>');
        $view->assertSeeText('Clique me primary');
        $view->assertDontSee('btn-default');
        $view->assertSee('btn-primary');
        $view->assertSee('btn-lg');
        $view->assertSee('title="Jean"', false);
    }

    public function test_outlined_primary_button()
    {
        $view = $this->blade('<x-form::button.primary outlined size="lg" title="Jean">Clique me</x-form::button.primary>');
        $view->assertSeeText('Clique me');
        $view->assertDontSee('btn-primary');
        $view->assertSee('btn-outline-primary');
    }

    public function test_secondary_button()
    {
        $view = $this->blade('<x-form::button.secondary size="sm" title="Jean">Clique me secondary</x-form::button.secondary>');
        $view->assertSeeText('Clique me secondary');
        $view->assertDontSee('btn-default');
        $view->assertSee('btn-secondary');
        $view->assertSee('btn-sm');
        $view->assertSee('title="Jean"', false);
    }

    public function test_danger_button()
    {
        $view = $this->blade('<x-form::button.danger size="xs" title="Jean">Clique me secondary</x-form::button.danger>');
        $view->assertSeeText('Clique me secondary');
        $view->assertDontSee('btn-default');
        $view->assertSee('btn-danger');
        $view->assertSee('btn-xs');
        $view->assertSee('title="Jean"', false);
    }

    public function test_warning_button()
    {
        $view = $this->blade('<x-form::button.warning size="xs" title="Jean">Clique me warning</x-form::button.danger>');
        $view->assertSeeText('Clique me warning');
        $view->assertDontSee('btn-default');
        $view->assertSee('btn-warning');
        $view->assertSee('btn-xs');
        $view->assertSee('title="Jean"', false);
    }

    public function test_success_button()
    {
        $view = $this->blade('<x-form::button.success size="xs" title="Jean">Clique me success</x-form::button.danger>');
        $view->assertSeeText('Clique me success');
        $view->assertDontSee('btn-default');
        $view->assertSee('btn-success');
        $view->assertSee('btn-xs');
        $view->assertSee('title="Jean"', false);
    }

    public function test_link_button()
    {
        $view = $this->blade('<x-form::button.link link="https://example.com" theme="primary" size="xs" title="Jean">Clique me link</x-form::button.link>');
        $view->assertSeeText('Clique me link');
        $view->assertDontSee('button');
        $view->assertSee('a');
        $view->assertSee('href="https://example.com"', false);
        $view->assertSee('btn-link');

        $view->assertDontSee('btn-primary');
        $view->assertSee('btn-xs');
        $view->assertSee('title="Jean"', false);
    }
}
