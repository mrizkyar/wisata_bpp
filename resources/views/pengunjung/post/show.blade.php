@extends('layouts.appuser')
 
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Show Wisata</h1>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
    <div class="row mt-2 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-secondary" href="{{ route('post.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Wisata:</strong>
                {{ $post->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Wisata:</strong>
                {{ $post->alamat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hari Buka:</strong>
                {{ $post->hari }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jam Buka:</strong>
                {{ $post->jam }}
            </div>
        </div>
    </div>
@endsection