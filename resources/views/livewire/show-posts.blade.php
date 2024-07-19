@php use Illuminate\Support\Str; @endphp
<div>
    <h2>
        Posts:
    </h2>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>
                Title
            </th>
            <th>
                Content
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr wire:key="{{ $post->id }}">
                <td>
                    {{ $post->title }}
                </td>
                <td>
                    {{ Str::words($post->content,8) }}
                </td>
                <td>
                    <button type="button" wire:click="delete({{ $post->id }})"
                            wire:confirm="Are you sure want to delete this post?">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
