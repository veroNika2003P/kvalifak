@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="lessons col-sm-12 col-md-6">
            <h1 class="text-center">{{ $title  }}</h1>

        </div>
        <div class="col-12">
            {!! $frame !!}
        </div>
    </div>
</div>
@endsection
