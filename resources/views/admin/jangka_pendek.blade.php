@extends('auth.layout')

@section('sidecontent')

<div class="pt-4 container">
    <div class="card border-0 p-5 shadow-sm">
        <div class="card-body">
            <div class="card-title h4 mb-4">Perhitungan Jangka Pendek</div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Proyek</th>
                            <th scope="col">Anggaran proyek/PTC</th>
                            <th scope="col">Total waktu proyek/PTT</th>
                            <th scope="col">PV</th>
                            <th scope="col">EV</th>
                            <th scope="col">AC</th>
                            <th scope="col">CV</th>
                            <th scope="col">SPI</th>
                            <th scope="col">CPI</th>
                            <th scope="col">ETC</th>
                            <th scope="col">ECC</th>
                            <th scope="col">ECT</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($proyeks && count($proyeks) > 0)
                            @foreach ($proyeks as $proyek)
                            <tr>
                                <td>#</td>
                                <td>{{ $proyek->nama_proyek }}</td>
                                <td>{{ $proyek->ptc }}</td>
                                <td>{{ $proyek->ptt }}</td>
                                <td>{{ $proyek->pv }}</td>
                                <td>{{ $proyek->ev }}</td>
                                <td>{{ $proyek->ac }}</td>
                                <td>{{ $proyek->cv }}</td>
                                <td>{{ $proyek->spi }}</td>
                                <td>{{ $proyek->cpi }}</td>
                                <td>{{ $proyek->etc }}</td>
                                <td>{{ $proyek->ecc }}</td>
                                <td>{{ $proyek->ect }}</td>
                                <td>
                                    <div class="btn btn-primary btn-block">Hitung</div>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="15">
                                    <div class="alert alert-info" role="alert">
                                        Data proyek kosong!
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@yield('content')
@endsection