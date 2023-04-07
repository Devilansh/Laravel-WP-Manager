<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://project.placementskill.com/wp-json/get_all/products');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_POST, 1);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return view('livewire.products',['data'=> $result]);
    }
}
