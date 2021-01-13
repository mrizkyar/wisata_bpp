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
    <hr>
    <h3>Komentar</h3>
    <hr>
    
    <form action="{{ route('post.komen.store', $post) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="username" name="username" class="form-control" id="" placeholder="username">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Komentar</label>
            <textarea class="form-control" name="komentar" rows="3"></textarea>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
    <br>
    <h4 class="text-center">Komentar</h4>
    <div class="col-sm-12">
           
            <div class="card">

                
                @foreach ($post->komens()->get() as $komen)
               
                <div class="card-header">
                    <h5 class="font-weight-bold">{{ $komen->username }}</h5>
                </div>
                <div class="card-body">
                    <p>{{ $komen->komentar }}</p>
                    <form action="{{ route('post.komen.destroy', $komen) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                @endforeach
            
            </div>
           
    </div>
</div>
   
@endsection