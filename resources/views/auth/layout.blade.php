@extends('app')

@section('content')
    <div class="row w-100">
        <div class="col-2 bg-success bg-gradient pt-5 ps-4" style="height: 100vh">
            <h1 class="h3 text-white">Earned Value Management (EVM)</h1>
            <hr>
            <ul class="nav d-flex flex-column justify-content-between" style="font-weight: bold">
                <li class="nav-item d-flex align-items-center py-2 ps-3 rounded bg-light my-1">
                    <img width="20px" src="{{ asset('icons/user.svg') }}" alt="user icon">
                    <a class="nav-link text-dark active" aria-current="page" href="/profile/{{Auth::user()->id}}">
                        User
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center py-2 ps-3 rounded bg-light my-1">
                    <img class="me-1" width="18px" src="{{ asset('icons/database.svg') }}" alt="user icon">
                    <a class="nav-link text-dark" href="/counts">
                        Data Proyek
                    </a>
                </li>
            </ul>
            <hr>
            <div class="d-grid gap-2">
                <a href="{{route('logout')}}" class="btn btn-danger btn-block">Logout</a>
            </div>
        </div>
        <div class="col-10 bg-light">
            @yield('sidecontent')
        </div>
    </div>
@endsection