@extends("pesan/master")

@section("title", "Chat")

@section("konten")

<div class="card-header">
    <h2 class="card-title">Chat</h2>
</div>

<div>

    @foreach ($kata as $k)

    @switch($k)

    @case(':))')
    <img src="1.png" style="width: 20px; height: 20px;">
    @break

    @case(':C')
    <img src="4.png" style="width: 20px; height: 20px;">
    @break

    @case(':3')
    <img src="2.png" style="width: 20px; height: 20px;">
    @break

    @case(':P')
    <img src="3.png" style="width: 20px; height: 20px;">
    @break

    @case(';)')
    <img src="5.png" style="width: 20px; height: 20px;">
    @break

    @default
    {{ $k }}

    @endswitch

    @if (!$loop->last)
    {{ " " }}
    @endif

    @endforeach

</div>
<br>
<br>
<br>
<br>

@endsection
