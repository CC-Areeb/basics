@extends('layouts.master')
@section('content')
    <div class="basic_testing m-12">
        <p class="py-2">Test</p>
        <a href={{ route('home.index') }} class="text-blue-400 underline">test link</a>
    </div>
@endsection