@extends('layouts.app')

@section('content')
{{-- <h1>Dati da "config/data.php": {{ $home }}</h1>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button> --}}
@foreach ($result as $movie)
    <h3>{{$movie->title}}</h3>
	<p>{{$movie->nationality}}</p>
	<span>vote: {{$movie->vote}}</span>
@endforeach
@endsection
