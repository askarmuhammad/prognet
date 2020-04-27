@extends('layout.app')

		@section('title','CRUD Kurikulum')

		@section('judul')
			Detail Data Kurikulum
		@endsection

		@section('konten')
			<p>
				<label for="nama">Nama Kurikulum</label>
				<input type="text" name="nama" value="{{$kurikulum->nama_kurikulum}}" readonly>
			</p>
			<p>
				<label for="merk">Tahun</label>
				<input type="date" name="jenis" value="{{$kurikulum->tahun}}" readonly>
			</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href='/kurikulum'">
			</p>
		@endsection