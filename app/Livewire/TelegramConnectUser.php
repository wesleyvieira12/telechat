<?php

namespace App\Livewire;

use Livewire\Component;

class TelegramConnectUser extends Component
{
    public function render()
    {
        if(auth()->user()->telegram){
            $this->redirect(route('dashboard'));
        }   

        return view('livewire.telegram-connect-user');
    }
}
