<div>
    <form wire:submit="add">
        <input type="text" wire:model.change="todo"/>
        <button type="submit">
            Add
        </button>
    </form>
    <span>
        Current todo: {{ $todo }}
    </span>
    <ul>
        @foreach($todos as $todo)
            <li>
                {{ $todo }}
            </li>
        @endforeach
    </ul>
</div>
