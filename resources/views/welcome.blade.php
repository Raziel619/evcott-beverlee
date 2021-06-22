@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome to Beverlee') }}</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                    <a href="{{route('readings.index')}}" class="btn btn-success mt-4 text-white">View EV 1 Readings</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                    <a href="{{route('excel.dl')}}" class="btn btn-success mt-4 text-white">Download Database .xlsx</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                    <a href="{{route('csv.dl')}}" class="btn btn-success mt-4 text-white">Download Database .csv</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                    <a href="{{route('reading2')}}" class="btn btn-success mt-4 text-white">View EV 2 Readings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
