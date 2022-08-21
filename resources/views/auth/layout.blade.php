@extends('app')

@section('content')

<div class="container overflow-hidden">
    <div class="row gx-5">
        <div class="col-2 bg-success bg-gradient pt-4" style="height: 100vh">
            <h1 class="h3 text-white">Earned Value Management (EVM)</h1>
            <hr>
            <ul class="nav flex-column" style="font-weight: bold">
                <li class="nav-item d-flex align-items-center">
                    <img width="18px" src="{{ asset('icons/user.svg') }}" alt="user icon">
                    <a class="nav-link text-dark active" aria-current="page" href="#">
                        User
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <img class="me-1" width="18px" src="{{ asset('icons/database.svg') }}" alt="user icon">
                    <a class="nav-link text-dark" href="#">
                        Data Proyek
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <img width="18px" src="{{ asset('icons/divide.svg') }}" alt="user icon">
                    <a class="nav-link text-dark" href="#">
                        Hasil Perhitungan
                    </a>
                </li>
            </ul>
        </div>
        <div class="col bg-light">
            @yield('sidecontent')
        </div>
    </div>
</div>
@endsection