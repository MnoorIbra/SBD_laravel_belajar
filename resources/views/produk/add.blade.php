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

        <h5 class="card-title fw-bolder mb-3">Tambah produk</h5>

		<form method="post" action="{{ route('produk.store') }}">
			@csrf
            <div class="mb-3">
                <label for="id_produk" class="form-label">ID produk</label>
                <input type="text" class="form-control" id="id_produk" name="id_produk">
            </div>
			<div class="mb-3">
                <label for="merk" class="form-label">merk</label>
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">stock</label>
                <input type="text" class="form-control" id="stock" name="stock">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>

            <div class="mb-3">
                <label for="id_admin" class="form-label">id_admin</label>
                <input type="text" class="form-control" id="harga" name="id_admin">
            </div>


			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Tambah" />
			</div>
		</form>
	</div>
</div>

@stop
