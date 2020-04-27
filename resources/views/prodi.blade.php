@extends('layout.app')

		@section('title','CRUD Prodi')

		@section('judul')
			Daftar Prodi
		@endsection

		@section('konten')
			<input type="button" value="Tambah Prodi Baru" onclick="location.href='/prodi/create'">
			<br>
			@if($all_prodi->isEmpty())
				PRODI KOSONG BROS!!!
			@else
			<table>
				<tr>
					<th>ID</th>
					<th>Nama Prodi</th>
				</tr>
				@foreach($all_prodi as $prodi)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$prodi->nama_prodi}}</td>
                        <td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/prodi/{{$prodi->id}}/edit'">
								<form style="display:inline-block;" action="/prodi/{{$prodi->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/prodi/{{$prodi->id}}'">
								<input type="button" value="Details" onclick="location.href='/prodi/{{$prodi->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection