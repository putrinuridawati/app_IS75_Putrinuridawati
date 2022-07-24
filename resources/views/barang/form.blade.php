@extends('layouts.master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
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
      <a href="/barang/form" class="btn btn-primary">Form Tambah Data</a>

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
              <table class="table table-hover text-nowrap">
              <thead>
                  <tr>
                    <th>NO</th>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>HARGA</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($barang as $item)
                  <tr>
                      <td>{{$nomor++}}</td>
                      <td>{{$item->kode_barang}}</td>
                      <td>{{$item->nama_barang}}</td>
                      <td>{{$item->hargaperkg}}</td>
                      <td>
                          <a href="#" class="btn btn-info">edit</a>
                          <a href="#" class="btn btn-danger">hapus</a>
                      </td>
                  </tr> 
                  @empty
                  <tr>
                      <td colspan="4">Belum Ada Data</td>
                  </tr>
                  @endforelse
                  
              </tbody>
              </table>
          </div>
      <!-- /.card-body -->
      
      <!-- /.card-footer-->
  </div>
  <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
@endsection