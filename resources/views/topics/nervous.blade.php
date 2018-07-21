@extends('layouts.app')
@section('content')
    <body>
        <H1>{{$title}}</H1>
        <ul>
        @if(count($contents)>0)
            @foreach($contents as $content)
            <li>{{$content}}</li>
            @endforeach
        @endif
        </ul>
    </body>
@endsection
