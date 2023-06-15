<?php

namespace SmirlTech\LaravelForm\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FormComponent extends Component
{

    public $images;

    public function render(): Factory|View|Application
    {
        return view('form::livewire.form-component');
    }

    public function mount()
    {
        if ($model_id && $model_type) {
            $model = $model_type::find($model_id);
            $this->images = $model->media()->images()->get();
        } else {
            $this->images = Media::images()->get();
        }
    }
}
