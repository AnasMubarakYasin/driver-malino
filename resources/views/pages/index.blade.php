@extends('layouts.index')

@section('head')

    @vite('resources/css/hero/main.css')

@endsection

@section('title', 'Home')

@section('body')

    <x-heros.main />

    <x-sections.menu />

@endsection
