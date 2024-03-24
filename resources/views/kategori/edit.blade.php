@extends('template')

@section('main')
    <h2>Edit Kategori</h2>
    <form action="{{ route('kategori.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" @error('nama') is-invalid @enderror  name="namaKategori" value="{{ $data->namaKategori }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" @error('deskripsi') is-invalid @enderror  name="descKategori" value="{{ $data->descKategori }}">
        </div>
        <button type="sumbit" class="btn btn-primary">Sumbit</button>
    </form>
@endsection