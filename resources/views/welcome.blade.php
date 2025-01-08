@extends('layouts.master')

@section('title', 'Welcome to Livewire Demo') <!-- Dynamic Title -->

@section('content')
    <!-- Include Livewire Counter Component -->
    @livewire('counter')
@endsection
