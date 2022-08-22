@extends('auth.layout')
@section('sidecontent')

<div class="pt-4 container">
    @extends('alert')
    <div class="card border-0 p-2 shadow-sm">
        <div class="card-body">
            <div class="card-title">
                <a type="button" href="/counts" class="btn btn-light mb-4">Kembali</a>
            </div>
            <form action="{{ url('/counts/update/'.$proyek->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_proyek" class="form-label">Nama Proyek</label>
                    <input value="{{$proyek->nama_proyek}}" type="text" class="form-control" id="nama_proyek" name="nama_proyek">
                </div>
                <div class="mb-3">
                    <label for="ptc" class="form-label">Anggaran Proyek/PTC</label>
                    <input value="{{$proyek->ptc}}" type="number" class="form-control" id="ptc" name="ptc">
                </div>
                <div class="mb-3">
                    <label for="ptt" class="form-label">Total waktu proyek/PTT</label>
                    <input value="{{$proyek->ptt}}" type="number" class="form-control" id="ptt" name="ptt">
                    <small class="text-muted">per-minggu</small>
                </div>
                <div class="mb-3">
                    <label for="pv" class="form-label">PV</label>
                    <input value="{{$proyek->pv}}" type="number" class="form-control" id="pv" name="pv">
                </div>
                <div class="mb-3">
                    <label for="ev" class="form-label">EV</label>
                    <input value="{{$proyek->ev}}" type="number" class="form-control" id="ev" name="ev">
                </div>
                <div class="mb-3">
                    <label for="ac" class="form-label">AC</label>
                    <input value="{{$proyek->ac}}" type="number" class="form-control" id="ac" name="ac">
                </div>
                <div class="mb-3">
                    <label for="jangka_proyek" class="form-label">Jenis jangka proyek</label>
                    <select id="jangka_proyek" name="jangka_proyek" class="form-select" aria-label="Default select example" required>
                        @if($proyek->jangka_proyek === "pendek")
                            <option selected value="pendek">Jangka pendek</option>
                            <option value="panjang">Jangka Panjang</option>
                        @elseif($proyek->jangka_proyek === "panjang")
                            <option value="pendek">Jangka pendek</option>
                            <option selected value="panjang">Jangka Panjang</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@yield('content')
@endsection