@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h3>Keranjang Belanja</h3>

    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kodeBarang" class="col-sm-1 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="kodeBarang" name="kodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-1 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-1 col-form-label">Harga per item</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="harga" name="harga">
            </div>
        </div>
        <br>
        <div class="text-center">
            <a class="btn btn-primary" href="/keranjangbelanja"> Kembali</a>
            <input class="btn btn-success" type="submit" value="Simpan Data">
        </div>
	</form>



@endsection
