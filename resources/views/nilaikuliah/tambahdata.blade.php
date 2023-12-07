@extends("nilaikuliah/master")

@section("title", "Tambah Data Nilai")

@section("konten")

    <h3>Tambah Data</h3>

    <a href="/nilaikuliah" class="btn btn-primary">Kembali</a>

    <br/>
    <br/>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="NRP" class="col-sm-3 col-form-label">NRP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-3 col-form-label">Nilai</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-sm-3 col-form-label">SKS</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="SKS" name="SKS">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <input class="btn btn-success" type="submit" value="Simpan Data">
            </div>
        </div>
    </form>

@endsection
