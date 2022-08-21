@extends('auth.layout')

@section('sidecontent')

<div class="pt-4 container">
    <div class="card border-0 p-5 shadow-sm">
        <div class="card-body">
            <div class="card-title h4 mb-4">Perhitungan Jangka Pendek</div>
            <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Data Proyek
            </button>
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

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Form data proyek</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="nama_proyek" class="form-label">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama_proyek">
                </div>
                <div class="mb-3">
                    <label for="ptc" class="form-label">Anggaran Proyek/PTC</label>
                    <input type="number" class="form-control" id="ptc">
                </div>
                <div class="mb-3">
                    <label for="ptc" class="form-label">Total waktu proyek/PTT</label>
                    <input type="number" class="form-control" id="ptc">
                </div>
                <div class="mb-3">
                    <label for="pv" class="form-label">PV</label>
                    <input type="number" class="form-control" id="pv">
                </div>
                <div class="mb-3">
                    <label for="ev" class="form-label">EV</label>
                    <input type="number" class="form-control" id="ev">
                </div>
                <div class="mb-3">
                    <label for="ac" class="form-label">AC</label>
                    <input type="number" class="form-control" id="ac">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

@yield('content')
@endsection