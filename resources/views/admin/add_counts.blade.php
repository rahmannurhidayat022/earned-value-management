@extends('app')

@section('content')

<div class="pt-4 container">
    @extends('alert')
    <div class="card border-0 p-2 shadow-sm my-5">
        <div class="card-body">
            <div class="card-title">
                <a type="button" href="/counts" class="btn btn-light mb-4">Kembali</a>
            </div>
            <form action="{{ route('proyek.add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_proyek" class="form-label">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" required>
                </div>
                <div class="mb-3">
                    <label for="ptc" class="form-label">Anggaran Proyek/PTC</label>
                    <input type="number" class="form-control" id="ptc" name="ptc" required>
                </div>
                <div class="mb-3">
                    <label for="ptt" class="form-label">Total waktu proyek/PTT</label>
                    <input type="number" class="form-control" id="ptt" name="ptt" required>
                    <small class="text-muted">per-minggu</small>
                </div>
                <div class="mb-3">
                    <label for="pv" class="form-label">PV</label>
                    <input type="number" class="form-control" id="pv" name="pv" required>
                </div>
                <div class="mb-3">
                    <label for="ev" class="form-label">EV</label>
                    <input type="number" class="form-control" id="ev" name="ev" required>
                </div>
                <div class="mb-3">
                    <label for="ac" class="form-label">AC</label>
                    <input type="number" class="form-control" id="ac" name="ac" required>
                </div>
                <div class="mb-3">
                    <label for="jangka_proyek" class="form-label">Jenis jangka proyek</label>
                    <select id="jangka_proyek" name="jangka_proyek" class="form-select" aria-label="Default select example" required>
                        <option selected value="pendek">Jangka pendek</option>
                        <option value="panjang">Jangka Panjang</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@yield('content')
@endsection