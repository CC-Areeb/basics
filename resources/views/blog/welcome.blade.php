@extends('layouts.master')
@section('content')

@foreach ($posts as $post)
    {{ $post->id }}
@endforeach
        
@endsection
