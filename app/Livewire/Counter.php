<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component {
    public int $count = 1;

    public function render() {
        return view('livewire.counter');
    }

    public function increment($by) {
        $this->count += $by;
    }

    public function decrement($by) {
        $this->count -= $by;
    }
}
