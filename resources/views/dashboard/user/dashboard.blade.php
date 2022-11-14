@extends('layout')

@include('partials.userDashboardNavbar')

@section('container')
    @if(session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <img src="{{asset('storage/images/logoBadanIntelijenNegara.png')}}" class="img-fluid rounded mx-auto d-block" alt="Lampiran" width="500" height="300">
@endsection