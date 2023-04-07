<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Userprofile extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h2>This is Inline</h2>
                {{-- Do your work, then step back. --}}
            </div>
        blade;
    }
}
