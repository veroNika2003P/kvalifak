@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="category col-sm-12 col-md-6" style="background-color: {{ $config['titleBgColor'] }};">
            <div class="category-theme">
                <img src="{{ asset('img/lessons/lesson_theme_before.png') }}" alt="" class="d-none d-sm-block">
                <p class="text-center">{{ $title  }}</p>
                <img src="{{ asset('img/lessons/lesson_theme_after.png') }}" alt="" class="d-none d-sm-block">
            </div>
            <div class="category-description">
                <p class="text-center">{{ $description }}</p>
            </div>
            <div class="category-todo" style="background-color: {{ $config['todoBgColor'] }}; color: {{ $config['todoTextColor'] }}">
                {{ $todo }}
            </div>

        </div>
        <div class="row">
        </div>
        <div class="clearfix"><br><br><br><br><br></div>

        <div class="lessons col-sm-12">
            <div class="row">
                @foreach ($lessons as $lesson)
                    <div class="lesson col-sm-6">
                        <a href="{{ url('lessons/' . $lesson['id']) }}" class="link-dark">
                            <img src="{{ asset($lesson['image']) }}" alt="" class="img-fluid">
                            <p style="background-color: {{ $config['lessonBgColor'] }};">{{ $lesson['title'] }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
