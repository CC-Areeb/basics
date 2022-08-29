@extends('layouts.master')
@section('content')
    {{-- <table class="table text-center">
        <thead>
            <tr>
                <th scope="id">Id</th>
                <th scope="title">Title</th>
                <th scope="excerpt">Summery</th>
                <th scope="body">Content</th>
                <th scope="minutes_to_read">Minutes to read</th>
                <th scope="created_at">Create at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $posts->id }}</th>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->excerpt }}</td>
                <td>{{ $posts->body }}</td>
                <td>{{ $posts->minutes_to_read }}</td>
                <td>{{ $posts->created_at }}</td>
            </tr>
        </tbody>
    </table> --}}

    @forelse ($collection as $item)
        
    @empty
        
    @endforelse

@endsection





