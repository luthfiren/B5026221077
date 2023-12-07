@extends('beras/master')
@section('title','Data beras')
@section('konten')
<div class="container mt-4">
    <a href="/beras" class="btn btn-secondary mb-3">Kembali</a>
    @foreach($beras as $p)
    <form class="form-horizontal" action="/beras/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodeberas }}">
        <div class="form-group row">
            <label class="control-label col-md-2" for="merk">Merk</label>
            <div class="col-md-10">
                <input type="text" required class="form-control" value="{{ $p->merkberas}}" name="merk" id="merk"
                    placeholder="Masukkan merk anda disini">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-2" for="stock">Stok</label>
            <div class="col-md-10">
                <input type="text" required class="form-control" value="{{ $p->stockberas }}" name="stock" id="stock"
                    placeholder="Masukkan stock anda disini">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-2" for="tersedia">Tersedia</label>
            <div class="col-md-10">
                <input type="number" required class="form-control" value="{{ $p->tersedia }}" name="tersedia"
                    id="tersedia" placeholder="1 for 'YES', 0 for 'NO'">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
