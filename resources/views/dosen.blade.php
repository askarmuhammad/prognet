@extends('layout.app')

		@section('title','CRUD Dosen')

		@section('judul')
			Daftar Dosen
		@endsection

		@section('konten')
			<input type="button" value="Tambah Dosen Baru" onclick="location.href='/dosen/create'">
			<br>
			@if($all_dosen->isEmpty())
				GAK ADA DOSEN BROS!!!!! ...
			@else
			<table>
				<tr>
					<th>ID</th>
					<th>NIP Dosen</th>
					<th>Nama Dosen</th>
				</tr>
				@foreach($all_dosen as $dosen)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$dosen->nip_dosen}}</td>
						<td>{{$dosen->nama_dosen}}</td>
                        <td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/dosen/{{$dosen->id}}/edit'">
								<form style="display:inline-block;" action="/dosen/{{$dosen->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/dosen/{{$dosen->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection