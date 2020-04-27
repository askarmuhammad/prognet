@extends('layout.app')

		@section('title','CRUD Matakuliah')

		@section('judul')
			Tambah Matkul
		@endsection

		@section('konten')
			<form action="/tambahmk" method="GET">
				@csrf
				<p>
					<label for="kode_mk">Kode Matakuliah</label>
					<br>
					<input type="text" name="kode_mk" >
				</p>
				<p>
					<label for="nama_mk">Nama Matakuliah</label>
					<br>
					<input type="text" name="nama_mk" >
				</p>
				<p>
					<label for="sks">SKS</label>
					<br>
					<input type="text" name="sks" >
				</p>
				<p>
					<label for="semester">Semester</label>
					<br>
					<input type="text" name="semester" >
				</p>
				<p>
					<label for="id_kurikulum">Kurikulum</label>	
					<select name="kurikulum">
							<option value="Test 1">Test 1</option>
							<option value="Test 2">Test 2</option>
							<option value="Test 3">Test 3</option>
					</select>
				</p>
				<p>
					<label for="id_dosen">Dosen</label>
					<select name="dosen">
							<option value="java">Prof. Ixan</option>
							<option value="html">Prof. Handi</option>
							<option value="C++">Dr. Dwi</option>
					</select>
							</p>
				<p>
					<label for="id_prodi">Prodi</label>
					<select name="prodi">
							<option value="java">Teknik Kedokteran</option>
							<option value="html">Teknik Lingkungan</option>
							<option value="C++">Kedokteran Arsitek</option>
					</select>
							</p>
				<p>
					<input type="submit" value="Simpan" >
					<input type="button" value="Kembali" onclick="location.href='/matakuliah'">
				</p>
			</form>
		@endsection