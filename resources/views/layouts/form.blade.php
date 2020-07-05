@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card table-responsive">
		<div class="card-header bg-primary">
			<h1 class="card-title text-white">Buat Artikel</h1>
		</div>
		<form action="/artikel" method="POST">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label for="judul">Judul : </label>
					<input type="text" class="form-control" placeholder="Enter Judul" name="judul">
				</div>
				<div class="form-group">
					<label for="isi">Isi : </label>
					<input type="text" class="form-control" placeholder="Enter Isi" name="isi">
				</div>
				<div class="form-group">
					<label for="tag">Tag : </label>
					<input type="text" class="form-control" placeholder="Enter Tag" name="tag">
				</div>
				<a href="/artikel" class="btn btn-primary">Kembali</a>
				<button type="submit" class="btn btn-primary">Buat</button>
			</div>
		</form>
	</div>
</div>
@endsection 