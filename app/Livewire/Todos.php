<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component {
    public string $todo = "";
    public array $todos = [];

    public function mount() {
        $this->todos = [
            'Take out trash',
            'Do dishes'
        ];
    }

    public function updatedTodo($value) {
        $this->todo = strtoupper($value);
        $this->validate();
    }

    public function add() {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render() {
        return view('livewire.todos');
    }
}
