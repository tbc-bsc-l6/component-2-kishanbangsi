@extends("layout")

@section("body")
    <div class="container">
        <h2 class="fw-bold text-center mt-5 mb-5">{{ $post->title }}</h2>

        <div class="container col-md-10 mx-auto">
            <p class="text-muted fw-bold">{{ date('d/m/Y', strtotime($post->created_at)) }}</p>
            <p class="fs-5 mt-4">{{ $post->description }}</p>
        </div>

        <div @class(['container', 'col-md-10', 'mx-auto', 'mt-3'])>
            <a href="/" class="btn btn-secondary">Home</a>
            <a href="/edit/{{ $post->slug }}" class="btn btn-primary">Edit</a>
            <form action="/delete/{{ $post->id }}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection