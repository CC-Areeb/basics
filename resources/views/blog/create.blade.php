@extends('layouts.master')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('test.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="name@example.com">
                        <label for="title">Title</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="excerpt" class="form-control" id="excerpt" placeholder="Password">
                        <label for="excerpt">Excerpt</label>
                    </div>

                    <div class="form-floating my-3">
                        <input type="number" name="minutes_to_read" class="form-control"
                                id="minutes_to_read" placeholder="Password">
                        <label for="minutes_to_read">Minutes to read</label>
                    </div>

                    <div class="form-check my-3">
                        <input class="form-check-input" type="checkbox"
                                name="is_published" value="on" id="is_published">
                        <label class="form-check-label" for="is_published">
                            yes
                        </label>
                    </div>

                    <div class="form-floating my-4">
                        <textarea class="form-control"
                                    placeholder="Leave a comment here"
                                    name="body" id="content" style="height: 200px">
                        </textarea>
                        <label for="content">Comments</label>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Submit your post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
