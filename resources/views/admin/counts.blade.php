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
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Planned Total Cost">PTC</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Planned Total Time">PTT</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Planned Value">PV</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned Value">EV</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Actual Cost">AC</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Cost Variance">CV</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Schedule Variance">SV</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Schedule Performance Index">SPI</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Cost Performance Index">CPI</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Estimate to Completion">ETC</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Estimate Completion Cost">ECC</th>
                            <th scope="col" data-bs-toggle="tooltip" data-bs-placement="top" title="Estimate Complation Time">ECT</th>
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
                                <td>{{ round($proyek->cv, 3) }}</td>
                                <td>{{ round($proyek->sv, 3) }}</td>
                                <td>{{ round($proyek->spi, 3) }}</td>
                                <td>{{ round($proyek->cpi, 3) }}</td>
                                <td>{{ number_format($proyek->etc) }}</td>
                                <td>{{ number_format($proyek->ecc) }}</td>
                                <td>{{ round($proyek->ect, 1) }}</td>
                                <td>
                                    @if($proyek->jangka_proyek === "pendek")
                                        <span class="badge bg-primary">Pendek</span>
                                    @elseif($proyek->jangka_proyek === "panjang")
                                        <span class="badge bg-success">Panjang</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{url('/counts/delete/'.$proyek->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="d-grid gap-2">
                                            <a href="/proyek/{{$proyek->id}}" class="btn btn-outline-secondary btn-sm">Detail</a>
                                            <a href="/update-count/{{$proyek->id}}" class="btn btn-secondary btn-sm">Perbaharui</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </form>
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