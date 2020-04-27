@extends('layout.app')

		@section('title','CRUD Fruits')

		@section('judul')
			Buah-Buahan
		@endsection

		@section('konten')
			<input type="button" value="Tambah Buah Baru" onclick="location.href='/fruit/tambah'">
			<br>
			@if($all_fruit->isEmpty())
				Buah belum datang ...
			@else
			<table>
				<tr>
					<th>No</th>
                    <th>Nama Buah</th>
                    <th>Berat</th>
                    <th>Warna</th>
                    <th>Kadar Racun</th>
					<th>Tanggal Panen</th>
				</tr>
				@foreach($all_fruit as $fruits)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$fruits->name}}</td>
                        <td>{{$fruits->weight}}</td>
                        <td>{{$fruits->color}}</td>
                        <td>{{$fruits->poisonous}}</td>
                        <td>{{$fruits->date_of_harvest}}</td>
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/fruit/{{$fruits->id}}/edit'">
								<form style="display:inline-block;" action="/fruit/{{$fruits->id}}" method="post">
								
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/fruit/{{$fruits->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection