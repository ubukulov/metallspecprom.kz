@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="title" style="font-size: 20px; margin-bottom: 20px;">
                {{ $page->title }}
            </div>

            <div>
                {!! $page->full_description !!}
            </div>
			
			@if($page->alias == 'kontakty')
                <iframe src="https://yandex.kz/map-widget/v1/-/CGHWb6Ob" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>
			@endif
        </div>
    </div>
@stop
