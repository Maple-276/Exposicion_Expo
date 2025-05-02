@extends('layouts.app')

@section('content')
    @include('components.main-title')

    @include('components.slides.slide1', ['active' => true])
    @include('components.slides.slide2', ['active' => false])
    @include('components.slides.slide3', ['active' => false])
    @include('components.slides.slide4', ['active' => false])
    @include('components.slides.slide5', ['active' => false])
    @include('components.slides.slide6', ['active' => false])
    @include('components.slides.slide7', ['active' => false])
    @include('components.slides.slide8', ['active' => false])
    @include('components.slides.slide9', ['active' => false])
    @include('components.slides.slide10', ['active' => false])
    @include('components.slides.slide11', ['active' => false])
    @include('components.slides.slide12', ['active' => false])
    @include('components.slides.slide13', ['active' => false])
    @include('components.slides.slide14', ['active' => false])

    @include('components.navigation-controls')
@endsection
