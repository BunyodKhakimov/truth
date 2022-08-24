@extends('layouts.web')

@section('content')
    @foreach($images as $image)
    <div class="grid-item item animate-box" data-animate-effect="fadeIn">
        <a href="{{asset('storage/'. $image->file)}}" class="image-popup" title="{{$image->title}}">
            <div class="img-wrap">
                <img src="{{asset('storage/'. $image->file)}}" alt="" class="img-responsive">
            </div>
            <div class="text-wrap">
                <div class="text-inner popup">
                    <div>
                        <h2>{{$image->title}}</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
@endsection
