@extends('admin.template')
 
@section('konten')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
              <li class="breadcrumb-item active">Data Admin</li>
            </ol>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
</div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-hover">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama user</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td class="text-center">
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $users->links() !!}
 
@endsection