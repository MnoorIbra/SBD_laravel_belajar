@extends('admin.layout')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
        </ul>
    </div>
@endif

<div class="card mt-4">
	<div class="card-body">

        <h5 class="card-title fw-bolder mb-3">Ubah Data Admin</h5>

		<form method="post" action="{{ route('admin.update', $data->id_admin) }}">
			@csrf
            <div class="mb-3">
                <label for="id_admin" class="form-label">ID Admin</label>
                <input type="text" class="form-control" id="id_admin" name="id_admin" value="{{ $data->id_admin }}" readonly>
            </div>
			<div class="mb-3">
                <label for="nama_admin" class="form-label">Nama Admin</label>
                <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="{{ $data->nama_admin }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-flex">
                <div class="text-center m-1">
                    <input type="submit" class="btn btn-primary" value="Ubah" />
                </div>
                <div class="text-center m-1">
                    <button class="btn btn-danger"><a href="{{ route('admin.index') }}" class="text-decoration-none text-light">Batal</a></button>
                </div>
            </div>
		</form>
	</div>
</div>

@stop
