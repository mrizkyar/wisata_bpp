@extends('layouts.appuser')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Kecamatan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href=""> Back</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Kecamatan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($kecamatans as $kecamatan)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $kecamatan->nama_kecamatan }}</td>
            <td class="text-center">
                <a class="btn btn-info btn-sm" href="{{ route('kecamatans.show',$kecamatan->id) }}">Show</a>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $kecamatans->links() !!}
 
@endsection