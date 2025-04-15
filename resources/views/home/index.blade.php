@extends('layouts.app')

@section('title', 'Anasayfa')

@section('content')
    @include('sections.about')
    @include('sections.service')
    @include('sections.destination')
    @include('sections.package')
    @include('sections.booking')
    @include('sections.process')
    @include('sections.team')
    @include('sections.testimonial')
@endsection
