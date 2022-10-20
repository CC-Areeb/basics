@extends('layouts.master')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">
                            {{ $one->title }}
                        </h1>
                        <h2>
                            {{ $one->excerpt }}
                        </h2>
                        <p class="card-text text-secondary fs-4">
                            {{ $one->body }}
                        </p>
                        <h5 class="text-primary">
                            Time to read: {{ $one->minutes_to_read }} minutes
                        </h5>
                        <h5 class="text-success">
                            published at: {{ $one->created_at }}
                        </h5>
                        <p>
                            @if ($one->is_published === 0)
                                Not published at the moment
                            @else
                                <span class="text-danger">
                                    Published by: {{ $one->author }}
                                </span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
