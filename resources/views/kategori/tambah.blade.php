@extends('template')

@section('main')
    <h2>Tambah Kategori</h2>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" @error('nama') is-invalid @enderror  name="namaKategori" value="{{ old('namaKategori') }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" @error('deskripsi') is-invalid @enderror  name="descKategori" value="{{ old('descKategori') }}">
        </div>
        <button type="sumbit" class="btn btn-primary">Sumbit</button>
    </form>
@endsection