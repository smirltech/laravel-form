<?php

namespace SmirlTech\LaravelForm\Form;

class Input
{
    public function __construct(
        private readonly ?string $name = null,
        private readonly ?string $type = null,
        private readonly ?string $label = null,
        private readonly ?string $value = null,
        private readonly ?string $prepend = null,
        private readonly ?string $icon = null,
        private readonly ?string $placeholder = null,
        private readonly ?bool   $required = false
    )
    {
    }

    public static function make(
        ?string $name = null,
        ?string $type = null,
        ?string $label = null,
        ?string $value = null,
        ?string $prepend = null,
        ?string $icon = null,
        ?string $placeholder = null,
        ?bool   $required = false): self
    {
        return new self(name: $name, type: $type, label: $label, value: $value, prepend: $prepend, icon: $icon, placeholder: $placeholder, required: $required);
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function render(): string
    {
        return <<<HTML
            <x-form::input
                wire:model="$this->name"
                name="$this->name"
                type="$this->type"
                label="$this->label"
                value="$this->value"
                prepend="$this->prepend"
                icon="$this->icon"
                placeholder="$this->placeholder"
                required="$this->required"
        HTML;

    }
}
