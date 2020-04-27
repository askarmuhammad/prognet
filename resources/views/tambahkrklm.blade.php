@extends('layout.app')

		@section('title','CRUD Kurikulum')

		@section('judul')
			Tambah Kurikulum
		@endsection

		@section('konten')
			<form action="/tambahkrklm" method="GET">
				@csrf
				<p>
					<label for="nama">Nama Kurikulum</label>
					<input type="text" name="nama_kurikulum" >
				</p>
				<p>
					<label for="jenis">Tahun</label>
					<input type="date" name="tahun" >
				</p>
				<p>
					<input type="submit" value="Simpan" >
					<input type="button" value="Kembali" onclick="location.href='/kurikulum'">
				</p>
			</form>
		@endsection