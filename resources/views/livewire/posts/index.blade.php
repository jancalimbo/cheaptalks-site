<div>
    {{-- In work, do what you enjoy. --}}

    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($posts as $post)
        <div class="card align-self-stretch m-1" style="width: 31%">
            <div class="card-body">
                <div class="card-title">
                    <h4>{{ $post->title }}</h4>
                    <p id="timestamp">{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
                {{-- <a href="{{ url('/posts/edit/' . $post->id) }}" ><i id="pen" class="fa-solid fa-user-pen"></i></a> --}}
                <a href="{{ url('edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit</a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
        @endforeach
    </div>

</div>
