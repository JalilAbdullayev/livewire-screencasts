<div>
    <h2>
        New Post:
    </h2>
    <div x-data="{count: 0}">
        <span x-text="count"></span>
        <button x-on:click="count++">
            +
        </button>
    </div>
    Current Title: <span x-text="$wire.title"></span>
    <button x-on:click="$wire.title = ''">
        Clear Title
    </button>
    <button type="button" x-on:click="$wire.save()">
        Submit Form
    </button>
    <form wire:submit="save" {{--x-on:submit.prevent="$wire.save()"--}}>
        <label>
            <span>
                Title
            </span>
            <input type="text" wire:model="title"/>
            @error('title')
            <em>
                {{ $message }}
            </em>
            @enderror
        </label>
        <label>
            <span>
                Content
            </span>
            <textarea wire:model="content"></textarea>
            <small>
                Characters: <span x-text="$wire.content.length"></span>
            </small>
            <small>
                Words: <span x-text="$wire.content.split(' ').length"></span>
            </small>
            @error('content')
            <em>
                {{ $message }}
            </em>
            @enderror
        </label>
        <button type="submit">
            Save
        </button>
    </form>
</div>
