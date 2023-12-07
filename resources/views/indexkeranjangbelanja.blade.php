@extends('master')

@section('title','Keranjang Belanja')

@section('konten')
   <h3>Keranjang Belanja</h3>

   <a href="/keranjangbelanja/beli" class="btn btn-primary"> Beli</a>

   <br />
   <br/>

   <table class="table table-striped table-hover">
       <tr>
           <th>Kode Pembelian</th>
           <th>Kode Barang</th>
           <th>Jumlah pembelian</th>
           <th>Harga per item</th>
           <th>Total</th>
           <th>Action</th>
       </tr>
       @foreach ($keranjangbelanja as $kb)
           <tr>
               <td>{{ $kb->ID }}</td>
               <td>{{ $kb->KodeBarang }}</td>
               <td>{{ $kb->Jumlah }}</td>
               <td>{{ number_format($kb->Harga, 0, ',', '.') }}</td>
               <td>{{ number_format($kb->Harga * $kb->Jumlah, 0, ',', '.') }}</td>
               <td>
                   <a href="/keranjangbelanja/batal/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
               </td>
           </tr>
       @endforeach
   </table>
@endsection
