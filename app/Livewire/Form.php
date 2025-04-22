<?php

namespace App\Livewire;

use App\Http\Requests\Contacts\StoreContactRequest;
use App\Models\Contacts;
use Livewire\Component;

class Form extends Component
{
    public $form = [];
    public function submit()
    {
        $request = new StoreContactRequest();

        $validated = $this->validate(
            $request->rules(),
            $request->messages(),
        );

        Contacts::create($validated['form']);
        $this->reset('form');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
