<tr @class(['archived' => $post->archived])>
    <td>
        {{ $post->title }}
    </td>
    <td>
        {{ Str::words($post->content,8) }}
    </td>
    <td>
        @unless($post->archived)
            <button type="button" wire:click="archive"
                    wire:confirm="Are you sure want to archive this post?">
                Archive
            </button>
        @endunless
        <button type="button" wire:click="$parent.delete({{ $post->id }})"
                wire:confirm="Are you sure want to delete this post?">
            Delete
        </button>
    </td>
</tr>
