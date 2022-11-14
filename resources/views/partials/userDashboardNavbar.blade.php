@extends('partials.navbar')

@section('navbar')
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/user/create">Buat Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard/user/">Cari Laporan</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-outline-secondary" type="submit" id="logoutButton">Logout</button>
                </form>
            </li>
        </ul>
    </div>
@endsection