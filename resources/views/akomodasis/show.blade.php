@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Akomodasi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('akomodasis.index') }}"> Back</a>
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
@endsection