@extends('layouts.app')
@include('layouts._modal')
@section('title')
Halaman Product
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0" style="display: block;">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama produk</th>
                    <th>Deskripsi</th>
                    <th>Tanggal pembuatan</th>
                    <th>Tanggal perbarui</th>
                    <th style="width: 10px">Action</th>
                  </tr> 
                </thead>
                <tbody>
                    @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->judul}}</td>
                    <td>{!!$product->deskripsi!!}</td>
                    <td>{{$product->created_at}}</td>
                    @if(count($products)> 0)
                    <td>data belum di update</td>
                    @else
                    <td>{{$product->update_at}}</td>
                    @endif
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                          <a target="_blank" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" href="">
                            <i class="fa fa-trash"></i>
                          </a>
                          <a target="_blank" href="{{ route('product.show', $product->id) }}" 
                              class="btn btn-primary btn-sm">
                              <i class="fa fa-eye"></i>
                          </a>
                          <a target="_blank" href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">
                              <i class="fa fa-edit"></i>
                          </a>
                          </button>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      
                      
                    </div>
                  </div>  
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>
          <a href="{{route ('product.create')}}">
            <br>
          <button type="button" class="btn btn-block btn-outline-success">Tambah Produk</button>
          </a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection