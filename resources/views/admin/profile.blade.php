@extends('auth.layout')
@section('sidecontent')

<div class="pt-4 container">
    @extends('alert')
    <div class="card border-0 p-2 shadow-sm">
        <div class="card-body">
            <div class="card-title h4 mb-4">Profil</div>
            <div class="card py-4 px-2 d-flex justify-content-center align-items-center" style="width: 300px">
                <img width="200px" class="img-thumbnail" src="{{asset('/icons/user.svg')}}" alt="profile">
                <h3 class="h4 mt-2">{{ucwords($user->nama)}}</h3>
                <span class="d-flex justify-content-center align-items-center">
                    <img width="18px" class="img-responsive me-1" src="{{asset('/icons/briefcase.svg')}}" alt="jabatan icon">
                    {{$user->jabatan}}
                </span>
                <button class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#updateprofile">Perbaharui</button>
                <div class="modal fade" id="updateprofile" tabindex="-1" aria-labelledby="updateprofileLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/profile/'.$user->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" value="{{$user->nama}}" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" value="{{$user->jabatan}}" class="form-control" id="jabatan" name="jabatan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" value="{{$user->username}}" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" min="6">
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')
@endsection