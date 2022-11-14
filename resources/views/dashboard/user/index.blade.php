@extends('layout')

@include('partials.userDashboardNavbar')

@section('container')
    <h2>Laporan Masuk</h2>
    <div class="tableFixHead">  
        <table>
            <thead>
                <tr>
                <th scope="col">Nomor Laporan</th>
                <th scope="col">Judul Laporan</th>
                <th scope="col">Pembuat Laporan</th>
                <th scope="col">Tampilkan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postsIn as $post)
                    <tr>
                        <td>{{ $post->jenis_laporan->jenis_laporan }}-
                            {{ $post->nomor_laporan->nomor_laporan }}/
                            {{ $post->author->name }}/
                            {{ $post->created_at->format('M') }}/
                            {{ $post->created_at->format('Y') }}
                        </td>
                        <td>{{ $post->judul_laporan }}</td>
                        <td>{{ $post->author->name }}</td>
                        <td>
                            <a href="/dashboard/user/{{ $post->id }}" class="badge bg-primary" style="text-decoration:none">Lihat</span></a>
                        </td>
                    </tr>
                @endforeach
                @foreach ($postsTembusan as $post)
                    <tr>
                        <td>{{ $post->jenis_laporan->jenis_laporan }}-
                            {{ $post->nomor_laporan->nomor_laporan }}/
                            {{ $post->author->name }}/
                            {{ $post->created_at->format('M') }}/
                            {{ $post->created_at->format('Y') }}
                        </td>
                        <td>{{ $post->judul_laporan }}</td>
                        <td>{{ $post->author->name }}</td>
                        <td>
                            <a href="/dashboard/user/{{ $post->id }}" class="badge bg-primary" style="text-decoration:none">Lihat</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br>
    <h2>Laporan Keluar</h2>
    <div class="tableFixHead">
        <table>
            <thead>
                <tr>
                <th scope="col">Nomor Laporan</th>
                <th scope="col">Judul Laporan</th>
                <th scope="col">Pembuat Laporan</th>
                <th scope="col">Tampilkan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postsOut as $post)
                    <tr>
                        <td>{{ $post->jenis_laporan->jenis_laporan }}-
                            {{ $post->nomor_laporan->nomor_laporan }}/
                            {{ $post->author->name }}/
                            {{ $post->created_at->format('M') }}/
                            {{ $post->created_at->format('Y') }}
                        </td>
                        <td>{{ $post->judul_laporan }}</td>
                        <td>{{ $post->author->name }}</td>
                        <td>
                            <a href="/dashboard/user/{{ $post->id }}" class="badge bg-primary" style="text-decoration:none">Lihat</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection