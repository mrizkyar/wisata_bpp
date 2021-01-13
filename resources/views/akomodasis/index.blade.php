@extends('admin.template')

@section('konten')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Akomodasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
              <li class="breadcrumb-item active">Data Akomodasi</li>
            </ol>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
    <div class="row mt-2 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <a class="btn btn-success" href="{{ route('akomodasis.create') }}"> Create Akomodasi</a>
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
            <th>Nama Akomodasi</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($akomodasis as $akomodasi)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $akomodasi->nama_akomodasi }}</td>
            <td class="text-center">
                <form action="{{ route('akomodasis.destroy',$akomodasi->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('akomodasis.show',$akomodasi->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('akomodasis.edit',$akomodasi->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $akomodasis->links() !!}
 
@endsection