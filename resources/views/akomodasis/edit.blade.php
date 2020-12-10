@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Akomodasi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('akomodasis.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('akomodasis.update',$akomodasi->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Post:</strong>
                    <input type="text" name="kode_akomodasi" value="{{ $akomodasi->kode_akomodasi }}" class="form-control" placeholder="Kode Akomodasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Akomodasi:</strong>
                    <input type="text" name="nama_akomodasi" value="{{ $akomodasi->nama_akomodasi }}" class="form-control" placeholder="Nama akomodasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Akomodasi:</strong>
                    <input type="text" name="alamat_akomodasi" value="{{ $akomodasi->alamat_akomodasi }}" class="form-control" placeholder="Alamat akomodasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kontak Akomodasi:</strong>
                    <input type="text" name="kontak_akomodasi" value="{{ $akomodasi->kontak_akomodasi }}" class="form-control" placeholder="Kontak akomodasi">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection