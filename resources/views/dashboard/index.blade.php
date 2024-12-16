@extends('layoutstumhs.main')

@section('container')
	<h3>Data QNA</h3>
 
	<a href="/tatausaha/tambah"> + Tambah QNA Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
        <th></th>
			<th>Pertanyaan</th>
			<th>Jawaban</th>
			<th>Opsi</th>
		</tr>
		@foreach($tatausahas as $t)
		<tr>
        <td>{{ $t->id }}</td>
			<td>{{ $t->pertanyaan }}</td>
			<td>{{ $t->jawaban }}</td>
			<td>
				<a href="/tatausaha/edit/{{ $t->id }}">Edit</a>
				|
				<a href="/tatausaha/hapus/{{ $t->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endsection