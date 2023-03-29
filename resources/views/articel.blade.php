@extends('layout')

@section('container')
<article>
    <h2>{{$articel->title}}</h2>
    {!!$articel->body!!}
</article>
    <a href="/home">Back to Home</a>
@endsection