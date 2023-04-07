<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $d;
    public $counter;
    public $counter1;
    public function mount(){
        $this->d = 'Message from search';
    }
    public function hydrate($n){
        $this->counter++;
    }
    public function updated($n){
        $this->counter1++;
    }

    public function update($n){
        $this->d = $n;
    }
    public function render()
    {
        $data = ['name'=>'ansh','email'=>'ansh@test.com'];
        return view('livewire.counter',['data'=> $data]);
    }
}
