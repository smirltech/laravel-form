<?php

namespace SmirlTech\LaravelForm\form;

/**
 * @property array $inputs
 */
class FromBuilder
{
    public function build(): self
    {
        return new self();
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function render(): string
    {
        return <<<HTML
            <x-form::form>
                $this->inputs
            </x-form::form>
        HTML;
    }

    public function input(): self
    {
        $input = new Input();
        return $this->add($input);
    }

    private function add(Input $input): self
    {
        $this->inputs[] = $input;
        return $this;

    }


}
