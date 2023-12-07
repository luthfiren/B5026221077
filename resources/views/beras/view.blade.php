@extends('beras/master')

@section('title', 'Data beras')

@section('konten')

        @foreach($beras as $p)
            <div class="container mt-4">
                <div class="card-header">
                    <h1 class="text-center card-title">Data beras</h1>
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
                                    <li class="list-group-item"><strong>Nama:</strong> {{ $p->merkberas }}</li>
                                    <li class="list-group-item"><strong>Stock:</strong> {{ $p->stockberas }}</li>
                                    <li class="list-group-item"><strong>Tersedia:</strong> {{ $p->availability }}</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <a href="/beras" class="btn btn-primary">OK</a> <!-- Centered button -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        @endforeach

@endsection
