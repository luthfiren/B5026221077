@extends('master')

@section('title','Edit Pegawai')

@section('konten')
<div class="container">
    <div class="card-header">
        <h1 class="text-center card-title">Edit Pegawai</h1>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">


            <br/>
            <br/>

            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="/pegawai" class="btn btn-primary">Kembali</a>

            </form>
            @endforeach
        </div>
    </div>
</div>
<br>
<br>
@endsection
