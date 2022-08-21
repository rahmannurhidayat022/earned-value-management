@extends('auth.layout')

@section('sidecontent')

<div class="pt-4 container">
    @extends('alert')
    <div class="card border-0 p-2 shadow-sm">
        <div class="card-body">
            <div class="card-title h4 mb-4">Data Proyek</div>
            <a type="button" href="/add-count" class="btn btn-success mb-4">
            Tambah Data Proyek
            </a>
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
                            <th scope="col">Jangka Proyek</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($proyeks && count($proyeks) > 0)
                            @foreach ($proyeks as $key => $proyek)
                            <tr>
                                <td>{{$loop->iteration}}</td>
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
                                <td>{{ $proyek->jangka_proyek }}</td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <div class="btn btn-secondary btn-sm">Perbaharui</div>
                                        <div class="btn btn-danger btn-sm">Delete</div>
                                    </div>
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
                {{ $proyeks->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@yield('content')
@endsection