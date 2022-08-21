@extends('auth.layout')
@section('sidecontent')

<div class="pt-4 container">
    @extends('alert')
    <div class="card border-0 p-2 shadow-sm">
        <div class="card-body">
            <div class="card-title">
                <a type="button" href="/counts" class="btn btn-light mb-4">Kembali</a>
            </div>
            <form action="{{ route('proyek.add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_proyek" class="form-label">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek">
                </div>
                <div class="mb-3">
                    <label for="ptc" class="form-label">Anggaran Proyek/PTC</label>
                    <input type="number" class="form-control" id="ptc" name="ptc">
                </div>
                <div class="mb-3">
                    <label for="ptt" class="form-label">Total waktu proyek/PTT</label>
                    <input type="number" class="form-control" id="ptt" name="ptt">
                    <small class="text-muted">per-minggu</small>
                </div>
                <div class="mb-3">
                    <label for="pv" class="form-label">PV</label>
                    <input type="number" class="form-control" id="pv" name="pv">
                </div>
                <div class="mb-3">
                    <label for="ev" class="form-label">EV</label>
                    <input type="number" class="form-control" id="ev" name="ev">
                </div>
                <div class="mb-3">
                    <label for="ac" class="form-label">AC</label>
                    <input type="number" class="form-control" id="ac" name="ac">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@yield('content')
@endsection