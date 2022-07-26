@extends('layouts.master')

@section('title', 'Tambah Data Transaksi')
@section('content')

<div class="container bg-white mt-3 p-4">
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success">Form</div>
        <div class="card-body text-success">

            <form method="post" action="/transaksi/store">
              @csrf
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Kode Transaksi</label>
                    <input type="text" name="kode_tran" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Kode Pelanggan</label>
                    <input type="text" name="kode_pelanggan" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Kode Kasir</label>
                    <input type="text" name="kode_kasir" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Kode Barang</label>
                    <select name="kode_barang" class="form-control">
                      <option value="">-Pilih Barang-</option>
                      @foreach ($barang as $item)
                          <option value="{{$item->id}}">{{$item->nama_barang}}
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Brutto</label>
                    <input type="text" name="brutto" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Tarra</label>
                    <input type="text" name="tarra" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Netto</label>
                    <input type="text" name="netto" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Total</label>
                    <input type="text" name="total" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Harga</label>
                    <input type="text" name="hrg" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bayar</label>
                    <input type="text" name="bayar" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                  <a href="/transaksi" class="btn btn-warning">Batal</a>
  
              </form>

        </div>
</div>
@endsection