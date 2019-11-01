@extends('layouts.app')
@section('content')
    <div class="main_banner" style="margin-bottom: 20px;">
        <img style="max-width: 100%;" src="{{ asset('img/banner.jpg') }}" alt="">
    </div>
    <div class="row">
        @foreach($cats as $cat)
            @if($cat->id == 1)
                @foreach($cat->children as $child)
                <div class="col-md-4 cat-block" style="margin-bottom: 20px;">
                    <div class="cat-im">
                        <a href="{{ $child->url() }}"><img src="{{ $child->image() }}" alt=""></a>
                    </div>

                    <div class="cat-title">
                        <a href="{{ $child->url() }}">{{ $child->title }}</a>
                    </div>
                </div>
                @endforeach
            @endif
        @endforeach
    </div>

    <iframe src="https://yandex.kz/map-widget/v1/-/CGHWb6Ob" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>
@stop
