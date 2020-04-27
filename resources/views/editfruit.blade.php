@extends('layout.app')

		@section('title','CRUD Buah')

		@section('judul')
			Edit Buah
		@endsection

		@section('konten')
			<form action="/fruit/{{$fruit->id}}" method="GET">
				@csrf
				@method('PUT')
				<p>
					<label for="nama">Nama Buah</label>
					<input type="text" name="name" value="{{$fruit->name}}">
				</p>
				<p>
					<label for="jenis">Berat Buah (Kg)</label>
					<input type="text" name="weight" value="{{$fruit->weight}}">
				</p>
				<p>
					<label for="merk">Warna Buah</label>
					<input type="text" name="color" value="{{$fruit->color}}">
                </p>
                <p>
					<label for="merk">Kadar Racun</label>
					<input type="text" name="color" value="{{$fruit->poisonous}}">
                </p>
                <p>
					<label for="merk">Tanggal Panen</label>
					<input type="text" name="color" value="{{$fruit->date_of_harvest}}">
				</p>
				<p>
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection