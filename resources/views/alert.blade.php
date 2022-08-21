@if(Session::has('success'))
    <div style="position: fixed; right: 70px; top: 100px; z-index: 999;" class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(Session::has('fail'))
    <div style="position: fixed; right: 70px; top: 100px; z-index: 999;" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{Session::get('fail')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif