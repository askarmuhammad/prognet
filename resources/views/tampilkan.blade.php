@extends('layout.app')

		@section('title','CRUD Buah')

		@section('judul')
			Detail Data Buah
		@endsection

		@section('konten')
		<p>
			<label for="nama">Nama Buah</label>
			<input type="text" name="name" value="{{$fruit->name}}" readonly>
		</p>
		<p>
			<label for="jenis">Berat Buah (Kg)</label>
			<input type="text" name="weight" value="{{$fruit->weight}}" readonly>
		</p>
		<p>
			<label for="merk">Warna Buah</label>
			<input type="text" name="color" value="{{$fruit->color}}" readonly>
		</p>
		<p>
			<label for="merk">Kadar Racun</label>
			<input type="text" name="color" value="{{$fruit->poisonous}}" readonly>
		</p>
		<p>
			<label for="merk">Tanggal Panen</label>
			<input type="text" name="color" value="{{$fruit->date_of_harvest}}" readonly>
		</p>
		@endsection