@extends('layout')
@section('judul', $thefood["title"])
@section('container')
@section('keywords', 'Makanan korea, harga makanan korea,Korean Food, Bibimbap, Topoki, Ramyeon')
@section('description', 'List of Korean Food')
@if ($thefood["status"] == 'R')
    <div class="notification has-background-grey-light has-text-primary-light mb-3 is-flex is-justify-content-center is-align-self-center is-flex-direction-column">
    @elseif ($thefood["status"] == 'SR')
    <div class="notification has-background-warning has-text-dark mb-3 is-flex is-justify-content-center is-align-self-center is-flex-direction-column">
    @else
    <div class="notification has-background-danger-dark has-text-primary-light mb-3 is-flex is-justify-content-center is-align-self-center is-flex-direction-column">
@endif
<img src="{{$thefood["image"]}}" class="is-flex is-justify-content-center is-align-self-center" alt="">
<h1 class="has-text-weight-bold is-uppercase is-size-2">{{$thefood["title"]}}</h1>
<h2 class="has-text-weight-semibold is-size-3">Status : {{$thefood["status"]}}</h2>
<h3 class="has-text-weight-medium is-size-4">Price : {{$thefood["price"]}}</h3>
{!!$thefood["fulldesc"]!!}
</div>
@endsection
