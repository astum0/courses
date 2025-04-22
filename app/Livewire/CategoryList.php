<?php

namespace App\Livewire;

use App\Models\category;
use Livewire\Component;

class CategoryList extends Component
{
    public function render()
    {
        $categories = category::orderByDesc('created_at')->get();
        return view('livewire.category-list', [
            'categories' => $categories
        ]);
    }
}
