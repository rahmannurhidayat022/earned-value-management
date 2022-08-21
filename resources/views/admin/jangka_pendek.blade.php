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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@yield('content')
@endsection