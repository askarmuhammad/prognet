@extends('layout.app')

		@section('title','CRUD Prodi')

		@section('judul')
			Tambah Prodi
		@endsection

		@section('konten')
			<form action="/tambahprodi" method="GET">
				@csrf
				<p>
					<label for="nama">Nama Prodi</label>
					<input type="text" name="nama_prodi" >
				</p>
				<p>
					<input type="submit" value="Simpan" >
					<input type="button" value="Kembali" onclick="location.href='/prodi'">
				</p>
			</form>
		@endsection