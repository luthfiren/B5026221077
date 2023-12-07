@extends("master")

@section("title", "Data Nilai")

@section("konten")

<h3>Nilai Kuliah</h3>

<a href="/nilaikuliah/tambahdata" class="btn btn-primary"> + Tambah Data Nilai</a> <br> <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            <td>{{ $p->NilaiHuruf }}</td>
            <td>{{ $p->Bobot }}</td>

		</tr>
		@endforeach
	</table>

@endsection
