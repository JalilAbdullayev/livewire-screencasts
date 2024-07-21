<div>
    <style>
        .archived {
            background-color: lightgray;
        }
    </style>
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
            <livewire:post-row :key="$post->id" :$post/>
        @endforeach
        </tbody>
    </table>
</div>
