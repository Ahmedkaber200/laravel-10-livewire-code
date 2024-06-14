<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('TodosOne')]

class Todosone extends Component
{
    public $todo = '';
    public $todos = ['who cares'];

    public function add(){
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }
    
    // capital word to create
    public function updatedTodo($value){
        $this->todo = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todosone');
    }
}
