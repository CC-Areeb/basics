@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-success mt-4" href="{{ route('test.create') }}" role="button">
                    What's on your mind <span class="fs-5">💭</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach ($post as $item)
            <div class="col-md-12 my-4">
                <div class="card">
                    <div class="card-body">
                        <p>Post numebr: {{ $item->id }}</p>
                        <h5 class="card-title">
                            {{ $item->title }}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{ $item->excerpt }}
                        </h6>
                        <p>
                            posted at: {{ $item->created_at }}
                        </p>
                        <a href="{{ route('test.show', $item->id) }}" class="text-decoration-none">
                            Detail ...
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection