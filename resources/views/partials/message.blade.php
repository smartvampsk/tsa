@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show">
            {{$error}}
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('success')}}
        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{session('error')}}

        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif
