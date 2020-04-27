@extends('layout.app')

		@section('title','CRUD Sepeda')

		@section('judul')
			Tambah Sepeda
		@endsection

		@section('konten')
			<form action="/tambah" method="GET">
				@csrf
				<p>
					<label for="nama">Nama Sepeda</label>
					<input type="text" name="nama" >
				</p>
				<p>
					<label for="jenis">Jenis Sepeda</label>
					<input type="text" name="jenis" >
				</p>
				<p>
					<label for="merk">Merk Sepeda</label>
					<input type="text" name="merk" >
				</p>
				<p>
					<input type="submit" value="Simpan" >
					<input type="button" value="Kembali" onclick="location.href='/sepeda'">
				</p>
			</form>
		@endsection