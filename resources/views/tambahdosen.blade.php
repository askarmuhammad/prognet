@extends('layout.app')

		@section('title','CRUD Dosen')

		@section('judul')
            Tambah Dosen<br>
		@endsection
		@section('konten')
			<form action="/tambahdosen" method="GET">
                @csrf
				<p>
                    <label for="nip_dosen">NIP Dosen</label>
                    <br>
					<input type="text" name="nip_dosen" >
				</p>
				<p>
                    <label for="nama_dosen">Nama Dosen</label>
                    <br>
					<input type="text" name="nama_dosen" >
				</p>
				<p>
					<input type="submit" value="Simpan" >
					<input type="button" value="Kembali" onclick="location.href='/dosen'">
				</p>
			</form>
		@endsection