<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Buy extends Component
{
    public function save()
    {
        $courses = Cart::where('user_id', Auth::user()->id)->get();

        foreach($courses as $course){
            order::create([
                'course_id' => $course->course_id,
                'user_id' => $course->user_id,
                'is_bought' => false
            ]);
        }

        Cart::where('user_id', Auth::user()->id)->delete();
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.buy');
    }
}
