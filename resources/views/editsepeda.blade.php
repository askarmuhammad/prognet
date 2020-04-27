@extends('layout.app')

		@section('title','CRUD Sepeda')

		@section('judul')
			Edit Sepeda
		@endsection

		@section('konten')
			<form action="/sepeda/{{$sepeda->id}}" method="GET">
				@csrf
				@method('PUT')
				<p>
					<label for="nama">Nama Sepeda</label>
					<input type="text" name="nama" value="{{$sepeda->nama}}">
				</p>
				<p>
					<label for="jenis">Jenis Sepeda</label>
					<input type="text" name="jenis" value="{{$sepeda->jenis}}">
				</p>
				<p>
					<label for="merk">Merk Sepeda</label>
					<input type="text" name="merk" value="{{$sepeda->merk}}">
				</p>
				<p>
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection