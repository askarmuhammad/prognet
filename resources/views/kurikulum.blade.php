@extends('layout.app')

		@section('title','CRUD kurikulum')

		@section('judul')
			Daftar Kurikulum
		@endsection

		@section('konten')
			<input type="button" value="Tambah Kurikulum Baru" onclick="location.href='/kurikulum/create'">
			<br>
			@if($all_kurikulum->isEmpty())
				Belum ada data ...
			@else
			<table>
				<tr>
					<th>No</th>
					<th>Nama Kurikulum</th>
					<th>Tahun</th>
					</tr>
				@foreach($all_kurikulum as $kurikulum)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$kurikulum->nama_kurikulum}}</td>
						<td>{{$kurikulum->tahun}}</td>
                        <td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/kurikulum/{{$kurikulum->id}}/edit'">
								<form style="display:inline-block;" action="/kurikulum/{{$kurikulum->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/kurikulum/{{$kurikulum->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection