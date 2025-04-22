<?php

namespace App\Livewire;

use App\Models\Reviews as ModelsReviews;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reviews extends Component
{
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    public $text = '';

    protected $rules = [
        'text' => 'required|min:10'
    ];

    protected $messages = [
        'text.required' => 'Поле обязательно для заполнения',
        'text.min' => 'Поле должно иметь не менее 10-ти символов'
    ];

    public function save()
    {
        $this->validate();

        ModelsReviews::create([
            'course_id' => $this->id,
            'user_id' => Auth::user()->id,
            'is_active' => false,
            'text' => $this->text
        ]);

        $this->reset('text');
    }
    public function render()
    {
        return view('livewire.reviews');
    }
}
