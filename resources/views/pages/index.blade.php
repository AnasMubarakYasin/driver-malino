@extends('layouts.index')

@section('head')

    @vite('resources/css/hero/main.css')

    @vite('resources/css/sections/slider.css')
    @vite('resources/css/sections/other-service.css')
    @vite('resources/css/sections/online-product.css')

    @vite('resources/css/navs/bottom-bar.css')

    @vite('resources/js/sections/slider.js')
    @vite('resources/js/sections/other-service.js')
@endsection

@section('title', 'Home')

@section('body')

    <x-heros.main />

    <x-sections.slider />
    <x-sections.main-service />
    <x-sections.other-service />
    <x-sections.online-product />

    <x-navs.bottom-bar />

@endsection
