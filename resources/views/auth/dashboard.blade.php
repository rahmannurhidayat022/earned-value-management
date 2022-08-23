@extends('auth.layout')

@section('sidecontent')

<div class="pt-4 container">
    <div class="card border-0 p-5 shadow-sm">
        <div class="card-body">
            <div class="card-title h4 mb-4">Dashboard</div>
            <div class="row">
                <div class="col-3">
                    <div style="min-height: 200px" class="card border border-success p-4 d-flex align-items-center justify-content-center">
                        <span class="fs-2">{{$total_proyek}}</span>
                        <p class="text-center mt-4">Total Proyek</p>
                    </div>
                </div>
                <div class="col-3">
                    <div style="min-height: 200px" class="card border border-success p-4 d-flex align-items-center justify-content-center">
                        <span class="fs-2">{{$proyek_pendek}}</span>
                        <p class="text-center mt-4">Proyek Jangka Pendek</p>
                    </div>
                </div>
                <div class="col-3">
                    <div style="min-height: 200px" class="card border border-success p-4 d-flex align-items-center justify-content-center">
                        <span class="fs-2">{{$proyek_panjang}}</span>
                        <p class="text-center mt-4">Proyek Jangka Panjang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')
@endsection