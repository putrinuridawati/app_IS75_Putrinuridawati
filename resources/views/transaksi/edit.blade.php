@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Edit transaksi</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Edit transaksi</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body table-responsive p-0">
            <form class="form-horizontal" action="/transaksi/{{$transaksi->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Transaksi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="kode_tran" value="{{$transaksi->kode_tran}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" name="tanggal" value="{{$transaksi->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Pelanggan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="kode_pelanggan" value="{{$transaksi->kode_pelanggan}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Kasir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="kode_kasir" value="{{$transaksi->kode_kasir}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                      <select name="kode_barang" class="form-control" >
                        <option value="">-Pilih barang-</option>
                        @foreach ($barang as $item)
                          <option value="{{$item->id}}">{{$item->nama_barang}}</option>
                        @endforeach
                        
                      </select>
        
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Brutto</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="brutto" value="{{$transaksi->brutto}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tarra</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="tarra" value="{{$transaksi->tarra}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Netto</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="netto" value="{{$transaksi->netto}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="total" value="{{$transaksi->total}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="harga" value="{{$transaksi->harga}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bayar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="bayar" value="{{$transaksi->bayar}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit Data</button>
                  <a href="/transaksi" class="btn btn-default float-right">Batal</a>
                </div>
                <!-- /.card-footer -->
              </form>        
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection





