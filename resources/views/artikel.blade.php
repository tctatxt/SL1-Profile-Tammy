{{-- @dd($artikel) --}}
@extends('layouts')
@section('container')
    <article class="boxArtikel p-3 pe-5 ps-5 d-flex flex-column">
        <h2 class="text-center d-flex justify-content-center mb-3 fs-2">{{$articel["title"]}}</h2>
        <div class="text-center">
            <img src="{{$articel["image"]}}"  style="width:50%" alt="">
        </div>
        <p class="fs-7 text-start lh-lg">{!!$articel["body"]!!}</p>
    </article>
@endsection