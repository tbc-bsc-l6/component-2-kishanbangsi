@extends('layout')

@section('body')
    <h2 class="fw-bold text-center mt-5 mb-5">All Blogs</h2>

    <div class="container">
        @foreach ($posts as $post)
        <div class="col-md-10 card mx-auto mt-5 px-5">
            <div class="card-body">
                <h5 class="card-title fs-3">{{ $post->title }}</h5>
                <p class="text-muted">{{ date('d/m/Y', strtotime($post->created_at)) }}</p>
                <p class="card-text mt-4">{{ substr($post->description, 0, 50) }}</p>
                <a href="/show/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection