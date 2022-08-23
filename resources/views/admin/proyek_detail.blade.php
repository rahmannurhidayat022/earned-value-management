@extends('app')

@section('content')
<div class="py-4 container">
    @extends('alert')
    <div class="card border-0 p-2 d-flex align-items-center">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between">
                <a type="button" href="/counts" class="btn btn-light mb-4">Kembali</a>
                <button type="button" onclick="window.print();" href="/counts" class="btn btn-primary mb-4 px-4">
                    Print
                </button>
            </div>
            <div class="container px-5">
                <hr>
                <div class="header">
                    <h1 class="h4 text-center">HASIL PERKIRAAN BIAYA DAN WAKTU PROYEK</h1>
                    <div class="row mt-5 mb-4">
                        <div class="col-3">Nama Proyek</div>
                        <div class="col-1">:</div>
                        <div class="col-8">{{ucwords($proyek->nama_proyek)}}</div>
                    </div>
                </div>
                <hr>
                <div class="body my-5">
                    <div class="row my-3">
                        <div class="col-3">Planned Total Cost (PTC)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{number_format($proyek->ptc)}}</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Planned Total Time (PTT)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">{{$proyek->ptt}} Minggu</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Planned value (PV)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{number_format($proyek->pv)}}</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Earned Value (EV)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{number_format($proyek->ev)}}</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Actual Cost (AC)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{number_format($proyek->ac)}}</div>
                    </div>
                </div>
                <hr>
                <div class="body-2 my-5">
                    <div class="row my-3">
                        <div class="col-3">Cost Variance (CV)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{ round($proyek->cv, 3) }}</div>
                        <div class="col-12">
                            <small class="text-muted">*Jika nilai yang dihasilkan CV negative, maka biaya yang dikeluarkan lebih tinggi dari anggaran rencana.</small>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Actual Cost (SV)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{ round($proyek->sv, 3) }}</div>
                        <div class="col-12">
                            <small class="text-muted">*Jika nilai yang dihasilkan SV negative, maka waktu pelaksanaan proyek keterlambatan dari rencana awal.</small>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Schedule Performance Index (SPI)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{ round($proyek->spi, 3) }}</div>
                        <div class="col-12">
                            <small class="text-muted">*Jika nilai SPI lebih kecil dari 1, maka waktu pelaksanaan terlambat dari jadwal yang direncanakan.</small>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Cost Performance Index (CPI)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{ round($proyek->cpi, 3) }}</div>
                        <div class="col-12">
                            <small class="text-muted">*Jika nilai CPI lebih kecil dari 1, maka pengeluaran lebih besar dari anggaran yang direncanakan.</small>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Estimate to Completion ETC</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{ number_format($proyek->etc) }}</div>
                        <div class="col-12">
                            <small class="text-muted">*Nilai hasil ECT merupakan sisa anggaran proyek untuk pekerjaan tersisa.</small>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Estimate Completion Cost (ECC)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">Rp. {{ number_format($proyek->ecc) }}</div>
                        <div class="col-12">
                            <small class="text-muted">*Jika nilai yang dihasilkan ECC tidak kurang atau lebih, maka diperkirakan biaya sesuai anggaran.</small>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3">Estimate Completion Time (ECT)</div>
                        <div class="col-1">:</div>
                        <div class="col-8">{{ round($proyek->ect, 1) }} (Minggu.Hari)</div>
                        <div class="col-12">
                            <small class="text-muted">*Jika kondisi pelaksanaan proyek tidak berubah, maka waktu proyek yang direncanakan tepat waktu.</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-5">
                        <p>-kondisi yang dihasilkan ECT jangka {{$proyek->jangka_proyek}} yaitu per minggu-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection