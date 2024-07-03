<?php

namespace App\Livewire\Tailwind;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $users = [];

    public function render()
    {
        return view('livewire.tailwind.search');
    }

    public function updatedSearch($value){
        if ($value) {
            $this->users = User::when($this->search,function ($q) {
                $q->where('name','like','%%'.$this->search.'%%');
            })
            ->take(5)
            ->get(); 
        }else{
            $this->users = [];
        }
    }
}
