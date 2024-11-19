@extends('layouts.admin-app')

@section('title','Employee')
@section('content')
    <h1 class="text-3xl text-black pl-6">@yield('title')</h1>
    <livewire:employees />
@endsection