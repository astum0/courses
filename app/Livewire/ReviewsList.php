<?php

namespace App\Livewire;

use App\Models\Reviews;
use Livewire\Component;

class ReviewsList extends Component
{
    public $id;

    public function mount($id){
        $this->id = $id;
    }
    public function render()
    {
        $reviews = Reviews::where('course_id', $this->id)->where('is_active', true)->orderByDesc('created_at')->with('user')->get();

        return view('livewire.reviews-list', [
            'reviews' => $reviews
        ]);
    }
}
