<?php

namespace App\Livewire;

use App\Models\course;
use Livewire\Component;

class CourseDetail extends Component
{
    public $details;

    public function mount($details){
        $this->details=$details;
    }
    public function render()
    {
        return view('livewire.course-detail');
    }
}
