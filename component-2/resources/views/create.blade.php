@extends('layout')

@section("body")
    <h2 class="fw-bold text-center mt-5 mb-5">Create New Blog</h2>

    <div class="container col-md-8">
        {{-- Form to create new blog --}}
        <form action="/" method="POST">
            @csrf
            <div class="mt-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mt-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30"
                rows="10"
                class="form-control" required>
                </textarea>
            </div>
            <a href="/" class="btn btn-secondary mt-3">Cancel</a>
            <button type="submit" class="btn btn-outline-primary mt-3">Create Post</button>
        </form>
    </div>
@endsection