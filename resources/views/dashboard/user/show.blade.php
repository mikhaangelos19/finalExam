@extends('layout')

@include('partials.userDashboardNavbar')

@section('container')
    <button class="btn btn-outline-secondary mb-5" type="button" id="returnButton" onclick="window.location.href = '/dashboard/user/'">Kembali</button>

    <div style="text-align: justify">
        <h5>Kepada: Yth. {{ $post->kepada->name }}</h5>
        <h5>Tembusan: Yth.
            @foreach($posts as $post)
                @foreach($post->tembusans as $tembusan)
                {{ $tembusan->name }}
                <br>
                @endforeach

            @endforeach

        </h5>
        <h5>Perihal: {{ $post->judul_laporan }}</h5>
        <br>
        {!! $post->isi !!}
        <br>
        <h5>Lampiran:</h5>
        @if($post->gambar)<img src="{{asset('storage/' . $post->gambar)}}" alt="Lampiran" width="500" height="300">
        @else <p>Tidak ada lampiran.</p>
        @endif
        
    </div>
@endsection