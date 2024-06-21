@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <h1 class="text-center">Тренажери по категорiям</h1>
        <div class="col-4 banner">
            <img src="{{ asset('img/banner2.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-8">

            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#" class="link-dark">
                            <img src="{{ asset('img/1.png') }}" alt="">
                            <div class="card-body text-end">
                                <h3 class="card-title">Одиницi вимiрювання</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#" class="link-dark">
                            <img src="{{ asset('img/2.png') }}" alt="">
                            <div class="card-body text-end">
                                <h3 class="card-title">Котра година?</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#" class="link-dark">
                            <img src="{{ asset('img/3.png') }}" alt="">
                            <div class="card-body text-end">
                                <h3 class="card-title">Усний рахунок</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <a href="#" class="link-dark">
                            <img src="{{ asset('img/4.png') }}" alt="">
                            <div class="card-body text-end">
                                <h3 class="card-title">Таблиця множення</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="card text-center">
                        <a href="#" class="link-dark">
                            <img src="{{ asset('img/5.png') }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title">Геометричнi фiгури навколо нас</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
