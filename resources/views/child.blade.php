@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)
    @if ($user == 1)
        @continue
    @endif

    <li>{{ $user }}</li>

    @if ($user == 5)
        @break
    @endif
@endforeach
    
@endsection