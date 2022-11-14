@extends('layout')

@include('partials.userDashboardNavbar')

@section('container')
    <h3 class="mb-3 font-weight-bold font-italic">FORM LAPORAN</h3>    
    <form method="post" action="/dashboard/user" enctype="multipart/form-data" id="uploadForm" name="uploadForm">
        @csrf
        <div class="mb-3">
            <label for="jenis_laporan_id" class="form-label">Jenis Laporan</label>
            <select class="form-select" aria-label="Default select example" name="jenis_laporan_id" id="jenis_laporan_id">
                <option value="1">Laporan Informasi</option>
                <option value="2">Laporan Kegiatan</option>
                <option value="3">Perkiraan Keadaan</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="judul_laporan" class="form-label">Judul Laporan</label>
            <input type="text" class="form-control @error('judul_laporan') is-invalid @enderror" id="judul_laporan" name="judul_laporan" placeholder="Judul Laporan">
            @error('judul_laporan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kepada_id" class="form-label">Kepada</label>
            <select class="form-select" aria-label="Default select example" name="kepada_id" id="kepada_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <p class="mb-2">Tembusan</p> 
            <fieldset>
                @foreach ($users as $user)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="{{ $user->id }}" name="tembusan[]">
                        <label class="form-check-label" for="tembusan">
                            {{ $user->name }}
                        </label>
                    </div>
                @endforeach                
            </fieldset>
        </div>
        
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Laporan</label>
            <input id="isi" type="hidden" name="isi">
            <trix-editor input="isi"></trix-editor>
            @error('isi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-group mb-3">
            <label for="gambar" class="form-label me-2">Lampiran Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
            @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            
        </div>
        <button class="btn btn-outline-secondary" type="submit" id="uploadButton" form="uploadForm">Kirim</button>
    </form>
@endsection