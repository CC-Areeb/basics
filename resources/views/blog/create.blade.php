@extends('layouts.master')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">


                {{-- <div class="py-4">
                    @if ($errors->any())
                        <div>
                            Something went wrong ...
                        </div>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div> --}}


                <form action="{{ route('test.index') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="author" class="form-control" id="name"
                            placeholder="name">
                        <label for="name">Author</label>

                        <span class="text-danger">
                            @error('author')
                                *{{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="title">
                        <label for="title">Title</label>

                        <span class="text-danger">
                            @error('title')
                                *{{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="excerpt" class="form-control" id="excerpt" placeholder="Password">
                        <label for="excerpt">Excerpt</label>

                        <span class="text-danger">
                            @error('excerpt')
                                *{{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating my-3">
                        <input type="number" name="minutes_to_read" class="form-control"
                                id="minutes_to_read" placeholder="Password">
                        <label for="minutes_to_read">Minutes to read</label>

                        <span class="text-danger">
                            @error('minutes_to_read')
                                *{{ $message }}
                            @enderror
                        </span>
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

                        <span class="text-danger">
                            @error('body')
                                *{{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating my-4" >
                        <input type="file" id="image_path" name="image_path">
                        <br>
                        <span class="text-danger">
                            @error('image_path')
                                *{{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Submit your post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
