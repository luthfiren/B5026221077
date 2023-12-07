
@extends('beras/master')
@section('title','Data beras')
@section('konten')

   <br>


   <p>Cari Data beras Berdasarkan nama:</p>
<form action="/beras/cari" method="GET" class=" d-flex">
   <input class="form-control" type="text" name="cari" placeholder="Masukkan nama beras disini" value="{{ old("cari", isset($cari) ? $cari : '') }}">
   <input class="btn btn-primary" type="submit" value="CARI">
</form>

<br>

   <a href="/beras/tambah" class="btn btn-primary"> + Tambah beras Baru</a>

   <br/>
   <br/>

   <table  class="table table-striped table-hover table-bordered">
       <tr class=" text-center">
           <th class="p-2">Kode</th>
           <th class="p-2">Merk</th>
           <th class="p-2">Stock</th>
           <th class="p-2">Tersedia</th>
           <th class="p-2">Opsi</th>
       </tr>
       @foreach($beras as $p)
       <tr>
           <td class="p-2">{{ $p->kodeberas}}</td>
           <td class="p-2">{{ $p->merkberas}}</td>
           <td class="p-2">{{ $p->stockberas }}</td>
           <td class="p-2">{{ $p->availability }}</td>

           <td class="text-center">
               <a href="/beras/view/{{ $p->kodeberas }}" class="btn btn-success m-2">View</a>
               |
               <a href="/beras/edit/{{ $p->kodeberas }}" class="btn btn-warning m-2">Edit</a>
               |
               <a href="/beras/hapus/{{ $p->kodeberas }}" class="btn btn-danger m-2">Hapus</a>
           </td>
       </tr>
       @endforeach
   </table>
@endsection
