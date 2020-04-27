@extends('layout.app')

		@section('title','CRUD matakuliah')

		@section('judul')
			Daftar Matakuliah
		@endsection

		@section('konten')
			<input type="button" value="Tambah Matakuliah Baru" onclick="location.href='/matakuliah/create'">
			<br>
			@if($all_matakuliah->isEmpty())
				Kamu Belum Kuliah
			@else
			<table>
				<tr>
					<th>ID</th>
					<th>Kode Matakuliah</th>
					<th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Kurikulum</th>
                    <th>Dosen</th>
                    <th>Prodi</th>
				</tr>
				@foreach($all_matakuliah as $matakuliah)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$matakuliah->kode_mk}}</td>
						<td>{{$matakuliah->nama_mk}}</td>
						<td>{{$matakuliah->sks}}</td>
                        <td>{{$matakuliah->semester}}</td>
						<td>{{$matakuliah->id_kurikulum}}</td>
                        <td>{{$matakuliah->id_dosen}}</td>
                        <td>{{$matakuliah->id_prodi}}</td>
                        <td>
							<span>
									<input type="button" value="Tambah Kurikulum Baru" onclick="location.href='/matakuliah/kurikulum/create'">
									<br>
								<input type="button" value="Edit" onclick="location.href='/matakuliah/{{$matakuliah->id}}/edit'">
								<form style="display:inline-block;" action="/matakuliah/{{$matakuliah->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/matakuliah/{{$matakuliah->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection