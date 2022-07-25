@extends('layouts.master')

@section('title', 'Tambah Data barang')
@section('content')

<div class="container bg-white mt-3 p-4">
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success">Form</div>
        <div class="card-body text-success">

            <form method="post" action="/barang/store">
              @csrf
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Kode Barang</label>
                    <input type="text" name="kod" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama Barang</label>
                    <input type="text" name="brg" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Harga</label>
                    <input type="text" name="hrg" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                  <a href="/barang" class="btn btn-warning">Batal</a>
  
              </form>

        </div>
</div>
@endsection