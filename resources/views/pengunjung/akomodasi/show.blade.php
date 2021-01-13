@extends('layouts.appuser')
 
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Show Akomodasi</h1>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
    <div class="row mt-2 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-secondary" href="{{ route('akomodasi.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Akomodasi:</strong>
                {{ $akomodasi->kode_akomodasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Akomodasi:</strong>
                {{ $akomodasi->nama_akomodasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Akomodasi:</strong>
                {{ $akomodasi->alamat_akomodasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kontak Akomodasi:</strong>
                {{ $akomodasi->kontak_akomodasi }}
            </div>
        </div>
    </div>
    <hr>
    <h3>Komentar</h3>
    <hr>
    <form action="{{ route('akomodasi.comment.store', $akomodasi) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="username" name="username" class="form-control" placeholder="username">
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
                 @foreach ($akomodasi->comments()->get() as $comment)
                 <div class="card-header">
                    <h5 class="font-weight-bold">{{ $comment->username }}</h5>
                </div>
                <div class="card-body">
                    <p>{{ $comment->komentar }}</p>
                    <form action="{{ route('akomodasi.comment.destroy', $comment) }}" method="POST">
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