<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        $carts = ModelsCart::where('user_id', FacadesAuth::user()->id)->where('in_cart', true)->with('course')->with('user')->orderByDesc('created_at')->get();

        $sum = 0;

        foreach($carts as $cart){
            $sum = $sum + $cart->cours->price;
        }

        return view('livewire.cart',[
            'sum' => $sum,
            'carts' => $carts
        ]);
    }
}
