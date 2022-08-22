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
                                <td>{{ number_format($proyek->ptc) }}</td>
                                <td>{{ $proyek->ptt }} Minggu</td>
                                <td>{{ number_format($proyek->pv) }}</td>
                                <td>{{ number_format($proyek->ev) }}</td>
                                <td>{{ number_format($proyek->ac) }}</td>
                                <td>{{ number_format($proyek->cv) }}</td>
                                <td>{{ number_format($proyek->spi) }}</td>
                                <td>{{ number_format($proyek->cpi) }}</td>
                                <td>{{ number_format($proyek->etc) }}</td>
                                <td>{{ number_format($proyek->ecc) }}</td>
                                <td>{{ number_format($proyek->ect) }}</td>
                                <td>
                                    @if($proyek->jangka_proyek === "pendek")
                                        <span class="badge bg-primary">Pendek</span>
                                    @elseif($proyek->jangka_proyek === "panjang")
                                        <span class="badge bg-success">Panjang</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <a href="/update-count/{{$proyek->id}}" class="btn btn-secondary btn-sm">Perbaharui</a>
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