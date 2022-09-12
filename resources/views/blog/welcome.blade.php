@extends('layouts.master')
@section('content')

    @forelse ($posts as $post)
        {{ $loop->depth }}
    @empty
        <p>Nothing here to see</p>
    @endforelse

@endsection
