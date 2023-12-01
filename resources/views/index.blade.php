@extends('master')

@section('title','DATABASE PEGAWAI')

@section('konten')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h2>Data Pegawai</h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="/pegawai/tambah" class="btn btn-primary">Tambah Pegawai Baru</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <form action="/pegawai/cari" method="GET" class="form-inline">
                <div class="form-group">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai" value="{{ old('cari', isset($cari) ? $cari : '') }}">
                </div>
                <button type="submit" class="btn btn-primary ml-2">CARI</button>
            </form>
        </div>
    </div>
</div>


	<br/>
	<br/>

	<table class="table table-hover table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$pegawai->links()}}
    @endsection


