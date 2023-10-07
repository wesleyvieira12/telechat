<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Card extends Component
{
    public $titulo = '';
    public $quantidade = 0;
    public $routeName = 'dashboard';

    public function render()
    {
        return view('livewire.components.card');
    }
}
