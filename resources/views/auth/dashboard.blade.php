@extends('auth.layout')

@section('sidecontent')

<div class="pt-4 container">
    <div class="card border-0 p-5 shadow-sm">
        <div class="card-body">
            <div class="card-title h4 mb-4">Dashboard</div>
            <div class="row">
                <div class="col-3">
                    <a style="text-decoration: none;" class="text-dark" href="#">
                        <div style="min-height: 200px" class="card border border-success p-4 d-flex align-items-center justify-content-center">
                            <img width="60px" src="{{ asset('icons/chevron-up.svg') }}" alt="dollar">
                            <p class="text-center mt-4">Perhitungan Jangka Pendek</p>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a style="text-decoration: none;" class="text-dark" href="#">
                        <div style="min-height: 200px" class="card border border-success p-4 d-flex align-items-center justify-content-center">
                            <img width="60px" src="{{ asset('icons/chevrons-up.svg') }}" alt="dollar">
                            <p class="text-center mt-4">Perhitungan Jangka Panjang</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')
@endsection