@extends('layouts.app')
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
                <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
                    @if($errors->any())
                    <br>
                    <font color="red">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </font>
                    @endif
                    <form action="{{route ('product.update', $products->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        Judul :
                        <br>
                    <input type="text" name="judul" id="judul" value="{{$products->judul}}">
                        <br>
                        Deskripsi :
                        <br>
                    <textarea name="deskripsi" id="deskripsi" cols="30" row="10">{{$products->deskripsi}}</textarea>
                        <br>
                        Stok :
                        <br>
                        <input type="number" name="stok" id="stok" class="form-control" value="{{$products->stok}}">
                        <br>
                        Harga :
                        <br>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{$products->harga}}">
                        <br>
                        <input type="submit" value="update">
                    </form>
                    
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