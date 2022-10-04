@extends('produk.layout')

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

        <h5 class="card-title fw-bolder mb-3">Ubah Data produk</h5>

		<form method="post" action="{{ route('produk.update', $data->id_produk) }}">
			@csrf
            <div class="mb-3">
                <label for="id_produk" class="form-label">ID produk</label>
                <input type="text" class="form-control" id="id_produk" name="id_produk" value="{{ $data->id_produk }}">
            </div>
			<div class="mb-3">
                <label for="nama_admin" class="form-label">merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="{{ $data->merk }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">stock</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{ $data->stock }}">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
            </div>


			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ubah" />
			</div>
		</form>
	</div>
</div>

@stop