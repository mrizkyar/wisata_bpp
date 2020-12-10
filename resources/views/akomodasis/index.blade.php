@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Akomodasi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('akomodasis.create') }}"> Create Akomodasi</a>
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