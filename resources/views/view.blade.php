@extends('master')

@section('title','View data pegawai')

@section('konten')
<div class="container mt-4">
    <div class="card-header">
        <h1 class="text-center card-title">Data Pegawai</h1>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

            <div class="card">

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $pegawai->pegawai_nama }}</li>
                        <li class="list-group-item"><strong>Jabatan:</strong> {{ $pegawai->pegawai_jabatan }}</li>
                        <li class="list-group-item"><strong>Umur:</strong> {{ $pegawai->pegawai_umur }}</li>
                        <li class="list-group-item"><strong>Alamat:</strong> {{ $pegawai->pegawai_alamat }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a href="/pegawai" class="btn btn-primary">OK</a> <!-- Centered button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

@endsection
