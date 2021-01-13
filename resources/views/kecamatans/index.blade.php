@extends('admin.template')
 
@section('konten')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Kecamatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
              <li class="breadcrumb-item active">Data Kecamatan</li>
            </ol>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
    <div class="row mt-2 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-success" href="{{ route('kecamatans.create') }}"> Create Kecamatan</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-hover">
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
                <form action="{{ route('kecamatans.destroy',$kecamatan->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('kecamatans.show',$kecamatan->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('kecamatans.edit',$kecamatan->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $kecamatans->links() !!}
 
@endsection