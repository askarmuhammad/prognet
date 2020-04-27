@extends('layout.app')

		@section('title','CRUD Buah')

		@section('judul')
			Tambah Buah
		@endsection

		@section('konten')
			<form action="/tambah" method="GET">
				@csrf
				<p>
					<label for="nama">Nama Buah</label>
					<input type="text" name="name" >
				</p>
				<p>
					<label for="jenis">Berat Buah (Kg)</label>
					<input type="text" name="weight" >
				</p>
				<p>
					<label for="merk">Warna Buah</label>
					<input type="text" name="color" >
                </p>
                <p>
					<label for="merk">Kadar Racun</label>
					<input type="text" name="color" >
                </p>
                <p>
					<label for="merk">Tanggal Panen</label>
					<input type="text" name="color" >
				</p>
				<p>
					<input type="submit" value="Simpan" >
					<input type="button" value="Kembali" onclick="location.href='/fruit'">
				</p>
			</form>