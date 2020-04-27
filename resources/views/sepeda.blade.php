@extends('layout.app')

		@section('title','CRUD sepeda')

		@section('judul')
			Daftar sepeda
		@endsection

		@section('konten')
			<input type="button" value="Tambah Sepeda Baru" onclick="location.href='/sepeda/create'">
			<br>
			@if($all_sepeda->isEmpty())
				Belum ada data ...
			@else
			<table>
				<tr>
					<th>No</th>
					<th>Nama Sepeda</th>
					<th>Jenis Sepeda</th>
					<th>Merk Sepeda</th>
				</tr>
				@foreach($all_sepeda as $sepeda)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$sepeda->nama}}</td>
						<td>{{$sepeda->jenis}}</td>
						<td>{{$sepeda->merk}}</td>
                        <td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/sepeda/{{$sepeda->id}}/edit'">
								<form style="display:inline-block;" action="/sepeda/{{$sepeda->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/sepeda/{{$sepeda->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection